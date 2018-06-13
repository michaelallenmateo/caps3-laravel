<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\User;
use Session;

class UsersController extends Controller
{
    function editAccount($id) {
        $review = User::find($id);

        return view('pages.editMyAccount', compact('user'));
    }

    function updateAccount (Request $request, $id) {
        $rules = array(
            'firstname' => 'required',
            'lastname' => 'required',
            'username' => 'required',
            'email' => 'required',
            'image' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        );
        $this->validate($request, $rules);

        $users = User::find($id);
        $users->firstname = $request->firstname;
        $users->lastname = $request->lastname;
        $users->username = $request->username;
        $users->email = $request->email;

        //if condition(if file is uploaded that will replace the old profile image. If no file is uploaded the old image will be used)
            if ($request->hasFile('image')) {

                $image = $request->file('image'); //gets the image from form
                $image_name = time().'.'.$image->getClientOriginalExtension();
                //ex. 12312356.jpg
                $destination = "image"; //ex "images/" -> file destination
                $image->move($destination, $image_name);

                $users->profile_image = $image_name;

            }

            $users->profile_image = $users->profile_image;

        $users->save();

        Session::flash('success_message', 'Your account was successfully updated. Thank You!');

        return redirect()->back();
    }


    function deleteAccount($id) {
        $users = User::find($id);
        $users->delete();

        Session::flash('success_message', 'Your account was successfully deleted');

        return redirect('/');
    }


}

<?php

namespace App\Policies;

use App\User;
use App\Reviews;
use Illuminate\Auth\Access\HandlesAuthorization;

class ReviewPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the reviews.
     *
     * @param  \App\User  $user
     * @param  \App\Reviews  $reviews
     * @return mixed
     */
    public function view(User $user, Reviews $reviews)
    {
        //
    }

    /**
     * Determine whether the user can create reviews.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the reviews.
     *
     * @param  \App\User  $user
     * @param  \App\Reviews  $reviews
     * @return mixed
     */
    public function update(User $user, Reviews $reviews)
    {
        //
    }

    /**
     * Determine whether the user can delete the reviews.
     *
     * @param  \App\User  $user
     * @param  \App\Reviews  $reviews
     * @return mixed
     */
    public function delete(User $user, Reviews $reviews)
    {
        //
    }
}

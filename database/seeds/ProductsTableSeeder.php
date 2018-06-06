<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('products')->delete();
        
        \DB::table('products')->insert(array (
            0 => 
            array (
                'id' => 1,
                'product_category_id' => 1,
                'name' => 'Pro Filt\'r Soft Mattle Longwear Foundation ',
                'brand' => 'Fenty Beauty',
                'price' => 1300.0,
                'description' => 'A soft matte, longwear foundation with buildable medium-to-full coverage, in a range of 40 shades.',
                'image' => 'makeup_fenty_foundation.jpg',
                'created_at' => '2018-06-06 05:04:20',
                'updated_at' => '2018-06-06 05:04:20',
            ),
            1 => 
            array (
                'id' => 2,
                'product_category_id' => 1,
                'name' => 'Dew Drops Coconut Gel Highlighter Foundation',
                'brand' => 'Marc Jacobs Beauty',
                'price' => 1300.0,
                'description' => 'An innovative foundation that delivers instant full coverage in a single dot—for less foundation for more coverage that lasts up to 24 hours.',
                'image' => 'marc_jacobs_foundation.jpg',
                'created_at' => '2018-06-06 05:09:54',
                'updated_at' => '2018-06-06 05:09:54',
            ),
            2 => 
            array (
                'id' => 3,
                'product_category_id' => 1,
                'name' => 'Highliner Matte Gel Eye Crayon Eye liner',
                'brand' => 'Marc Jacobs Beauty',
                'price' => 1300.0,
                'description' => 'A waterproof, gel eye crayon for a bold, matte finish.',
                'image' => 'marc_jacobs_eyeliner.jpg',
                'created_at' => '2018-06-06 05:13:37',
                'updated_at' => '2018-06-06 05:13:37',
            ),
            3 => 
            array (
                'id' => 4,
                'product_category_id' => 2,
                'name' => 'VineActiv 3-in-1 Moisturizer',
                'brand' => 'Caudalie',
                'price' => 2165.0,
                'description' => 'A daily moisturiser that instantly restores a youthful-looking glow, smooths the look of wrinkles, and protects the skin from damaging pollutant particles.',
                'image' => 'cuadalie_skincare_moisturizer.jpg',
                'created_at' => '2018-06-06 06:23:57',
                'updated_at' => '2018-06-06 06:23:57',
            ),
        ));
        
        
    }
}
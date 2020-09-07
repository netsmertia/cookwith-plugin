<?php namespace recipe\Recipe\Updates;

use Seeder;

class RecipeRecipeAdsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('recipe_recipe_ads')->delete();
        
        \DB::table('recipe_recipe_ads')->insert(array (
            0 => 
            array (
                'id' => 1,
                'content' => '',
                'container_css' => NULL,
                'url' => '/contact',
                'is_image' => 1,
                'is_active' => 1,
                'created_at' => '2020-06-24 17:20:11',
                'updated_at' => '2020-07-19 12:22:17',
                'deleted_at' => NULL,
                'title' => 'placeholder_banner_ad',
            ),
            1 => 
            array (
                'id' => 2,
                'content' => '',
                'container_css' => NULL,
                'url' => '/contact',
                'is_image' => 1,
                'is_active' => 1,
                'created_at' => '2020-06-24 17:22:14',
                'updated_at' => '2020-07-19 12:22:53',
                'deleted_at' => NULL,
                'title' => 'placeholder_vertical_ad',
            ),
            2 => 
            array (
                'id' => 3,
                'content' => '',
                'container_css' => NULL,
                'url' => '/contact',
                'is_image' => 1,
                'is_active' => 1,
                'created_at' => '2020-06-24 17:22:42',
                'updated_at' => '2020-07-19 12:23:11',
                'deleted_at' => NULL,
                'title' => 'placeholder_box_ad',
            ),
        ));
        
        
    }
}
<?php namespace recipe\Recipe\Updates;

use Seeder;

class RecipeRecipeAdspaceTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('recipe_recipe_adspace')->delete();
        
        \DB::table('recipe_recipe_adspace')->insert(array (
            0 => 
            array (
                'id' => 1,
                'is_active' => 1,
                'created_at' => '2020-06-28 16:20:43',
                'updated_at' => '2020-06-29 17:20:39',
                'deleted_at' => NULL,
                'space_code' => 'home_banner_top',
                'title' => 'Home Page - Banner - top',
                'is_random_ad' => 1,
                'space_type' => 'H',
            ),
            1 => 
            array (
                'id' => 2,
                'is_active' => 1,
                'created_at' => '2020-06-29 15:00:44',
                'updated_at' => '2020-06-29 15:16:35',
                'deleted_at' => NULL,
                'space_code' => 'home_banner_footer',
                'title' => 'Home Page - Banner - Footer',
                'is_random_ad' => 1,
                'space_type' => 'H',
            ),
            2 => 
            array (
                'id' => 3,
                'is_active' => 1,
                'created_at' => '2020-06-29 15:02:58',
                'updated_at' => '2020-07-19 12:29:33',
                'deleted_at' => NULL,
                'space_code' => 'home_vertical_sidebar',
                'title' => 'Home Page - Vertical - Sidebar',
                'is_random_ad' => 1,
                'space_type' => 'V',
            ),
            3 => 
            array (
                'id' => 4,
                'is_active' => 1,
                'created_at' => '2020-06-29 15:04:02',
                'updated_at' => '2020-07-19 12:28:43',
                'deleted_at' => NULL,
                'space_code' => 'recipes_vertical_sidebar',
                'title' => 'Recipes Page - Vertical - Sidebar',
                'is_random_ad' => 1,
                'space_type' => 'V',
            ),
            4 => 
            array (
                'id' => 5,
                'is_active' => 1,
                'created_at' => '2020-06-29 15:04:47',
                'updated_at' => '2020-06-29 15:16:04',
                'deleted_at' => NULL,
                'space_code' => 'recipes_banner_top',
                'title' => 'Recipes Page - banner - top',
                'is_random_ad' => 1,
                'space_type' => 'H',
            ),
            5 => 
            array (
                'id' => 6,
                'is_active' => 1,
                'created_at' => '2020-06-29 15:05:42',
                'updated_at' => '2020-07-19 12:29:09',
                'deleted_at' => NULL,
                'space_code' => 'recipes_box_sidebar',
                'title' => 'Recipes page - Box - Sidebar',
                'is_random_ad' => 1,
                'space_type' => 'B',
            ),
            6 => 
            array (
                'id' => 7,
                'is_active' => 1,
                'created_at' => '2020-06-29 15:06:44',
                'updated_at' => '2020-07-19 12:28:31',
                'deleted_at' => NULL,
                'space_code' => 'videos_vertical_sidebar',
                'title' => 'Videos Page - Vertical - Sidebar',
                'is_random_ad' => 1,
                'space_type' => 'V',
            ),
            7 => 
            array (
                'id' => 8,
                'is_active' => 1,
                'created_at' => '2020-06-29 15:07:36',
                'updated_at' => '2020-06-29 15:07:36',
                'deleted_at' => NULL,
                'space_code' => 'contact_banner_top',
                'title' => 'Contact page - banner - top',
                'is_random_ad' => 1,
                'space_type' => 'H',
            ),
            8 => 
            array (
                'id' => 9,
                'is_active' => 1,
                'created_at' => '2020-06-29 15:08:11',
                'updated_at' => '2020-06-29 15:08:11',
                'deleted_at' => NULL,
                'space_code' => 'contact_banner_footer',
                'title' => 'Contact Page - banner - footer',
                'is_random_ad' => 1,
                'space_type' => 'H',
            ),
            9 => 
            array (
                'id' => 10,
                'is_active' => 1,
                'created_at' => '2020-06-29 15:08:36',
                'updated_at' => '2020-07-19 12:29:45',
                'deleted_at' => NULL,
                'space_code' => 'contact_box_sidebar',
                'title' => 'Contact page - box - sidebar',
                'is_random_ad' => 1,
                'space_type' => 'B',
            ),
            10 => 
            array (
                'id' => 11,
                'is_active' => 1,
                'created_at' => '2020-06-29 15:09:39',
                'updated_at' => '2020-07-19 12:30:30',
                'deleted_at' => NULL,
                'space_code' => 'blog_list_vertical_sidebar',
                'title' => 'Blog List Page - vertical - sidebar',
                'is_random_ad' => 1,
                'space_type' => 'V',
            ),
            11 => 
            array (
                'id' => 12,
                'is_active' => 1,
                'created_at' => '2020-06-29 15:07:36',
                'updated_at' => '2020-06-29 15:07:36',
                'deleted_at' => NULL,
                'space_code' => 'about_banner_top',
                'title' => 'About page - banner - top',
                'is_random_ad' => 1,
                'space_type' => 'H',
            ),
            12 => 
            array (
                'id' => 13,
                'is_active' => 1,
                'created_at' => '2020-06-29 15:08:11',
                'updated_at' => '2020-06-29 15:08:11',
                'deleted_at' => NULL,
                'space_code' => 'about_banner_footer',
                'title' => 'About Page - banner - footer',
                'is_random_ad' => 1,
                'space_type' => 'H',
            ),
            13 => 
            array (
                'id' => 14,
                'is_active' => 1,
                'created_at' => '2020-06-29 15:08:36',
                'updated_at' => '2020-07-19 12:30:41',
                'deleted_at' => NULL,
                'space_code' => 'about_box_sidebar',
                'title' => 'About page - box - sidebar',
                'is_random_ad' => 1,
                'space_type' => 'B',
            ),
            14 => 
            array (
                'id' => 15,
                'is_active' => 1,
                'created_at' => '2020-06-29 15:07:36',
                'updated_at' => '2020-06-29 15:07:36',
                'deleted_at' => NULL,
                'space_code' => 'blog_banner_top',
                'title' => 'Blog page - banner - top',
                'is_random_ad' => 1,
                'space_type' => 'H',
            ),
            15 => 
            array (
                'id' => 16,
                'is_active' => 1,
                'created_at' => '2020-06-29 15:09:39',
                'updated_at' => '2020-07-19 12:30:15',
                'deleted_at' => NULL,
                'space_code' => 'blog_vertical_sidebar',
                'title' => 'Blog Page - vertical - sidebar',
                'is_random_ad' => 1,
                'space_type' => 'V',
            ),
            16 => 
            array (
                'id' => 17,
                'is_active' => 1,
                'created_at' => '2020-06-29 15:08:36',
                'updated_at' => '2020-07-19 12:29:21',
                'deleted_at' => NULL,
                'space_code' => 'recipe_box_sidebar',
                'title' => 'Recipe page - box - sidebar',
                'is_random_ad' => 1,
                'space_type' => 'B',
            ),
            17 => 
            array (
                'id' => 18,
                'is_active' => 1,
                'created_at' => '2020-06-29 15:08:11',
                'updated_at' => '2020-06-29 15:08:11',
                'deleted_at' => NULL,
                'space_code' => 'recipe_banner_footer',
                'title' => 'Recipe Page - banner - footer',
                'is_random_ad' => 1,
                'space_type' => 'H',
            ),
            18 => 
            array (
                'id' => 19,
                'is_active' => 1,
                'created_at' => '2020-07-19 12:26:01',
                'updated_at' => '2020-07-19 12:26:01',
                'deleted_at' => NULL,
                'space_code' => 'recipes_banner_middle',
                'title' => 'Recipes Page  - Banner - Middle',
                'is_random_ad' => 1,
                'space_type' => 'H',
            ),
        ));
        
        
    }
}
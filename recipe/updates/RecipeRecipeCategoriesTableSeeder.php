<?php namespace recipe\Recipe\Updates;

use Seeder;

class RecipeRecipeCategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('recipe_recipe_categories')->delete();
        
        \DB::table('recipe_recipe_categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'category_title' => 'Appetizers',
                'category_slug' => 'appetizers',
                'description' => NULL,
                'created_at' => '2019-10-21 21:11:06',
                'updated_at' => '2019-04-20 17:40:36',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'category_title' => 'Chicken',
                'category_slug' => 'chicken',
                'description' => NULL,
                'created_at' => '2018-08-10 09:56:16',
                'updated_at' => '2018-08-26 05:46:08',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'category_title' => 'Meat',
                'category_slug' => 'meat',
                'description' => NULL,
                'created_at' => '2018-12-13 08:08:27',
                'updated_at' => '2020-04-24 08:30:26',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'category_title' => 'Fish and Seafood',
                'category_slug' => 'fish',
                'description' => NULL,
                'created_at' => '2020-03-28 03:13:24',
                'updated_at' => '2019-10-09 23:42:18',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'category_title' => 'Occidental Desserts',
                'category_slug' => 'occidental-desserts',
                'description' => NULL,
                'created_at' => '2019-08-31 21:57:54',
                'updated_at' => '2018-07-12 23:49:09',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'category_title' => 'Oriental Desserts',
                'category_slug' => 'oriental-desserts',
                'description' => NULL,
                'created_at' => '2019-03-02 14:18:40',
                'updated_at' => '2019-10-06 09:12:29',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'category_title' => 'Pastas',
                'category_slug' => 'pasta',
                'description' => NULL,
                'created_at' => '2018-11-01 12:13:02',
                'updated_at' => '2020-05-26 18:34:17',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'category_title' => 'Pizzas',
                'category_slug' => 'pizza',
                'description' => NULL,
                'created_at' => '2019-01-10 17:18:54',
                'updated_at' => '2019-06-12 15:58:13',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'category_title' => 'Salads',
                'category_slug' => 'salad',
                'description' => NULL,
                'created_at' => '2019-09-01 13:01:00',
                'updated_at' => '2019-07-09 02:16:58',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'category_title' => 'Soups',
                'category_slug' => 'soup',
                'description' => NULL,
                'created_at' => '2020-02-09 05:28:25',
                'updated_at' => '2019-07-03 05:37:47',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'category_title' => 'Vegetarian',
                'category_slug' => 'vegetarian',
                'description' => NULL,
                'created_at' => '2018-09-15 20:50:15',
                'updated_at' => '2018-07-19 00:24:29',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'category_title' => 'Sauces',
                'category_slug' => 'sauces',
                'description' => NULL,
                'created_at' => '2020-02-15 20:38:18',
                'updated_at' => '2018-07-06 15:04:35',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'category_title' => 'Jams and Marmalade',
                'category_slug' => 'jams-and-marmalade',
                'description' => NULL,
                'created_at' => '2019-09-12 22:34:38',
                'updated_at' => '2020-06-23 04:46:02',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'category_title' => 'Drinks',
                'category_slug' => 'drinks',
                'description' => NULL,
                'created_at' => '2018-10-23 13:12:51',
                'updated_at' => '2020-02-19 12:52:42',
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'category_title' => 'Tarts',
                'category_slug' => 'tarts',
                'description' => NULL,
                'created_at' => '2019-10-08 09:51:35',
                'updated_at' => '2019-12-14 19:46:23',
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'category_title' => 'Breakfast',
                'category_slug' => 'breakfast',
                'description' => NULL,
                'created_at' => '2019-12-24 06:23:45',
                'updated_at' => '2019-07-22 05:46:11',
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'category_title' => 'Bread',
                'category_slug' => 'bread',
                'description' => NULL,
                'created_at' => '2020-07-17 23:48:15',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'category_title' => 'Sandwiches',
                'category_slug' => 'sandwiches',
                'description' => NULL,
                'created_at' => '2020-07-17 23:49:16',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'category_title' => 'Condiments',
                'category_slug' => 'condiments',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'category_title' => 'Beverages',
                'category_slug' => 'beverages',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}
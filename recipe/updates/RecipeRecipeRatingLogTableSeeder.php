<?php namespace recipe\Recipe\Updates;

use Seeder;

class RecipeRecipeRatingLogTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('recipe_recipe_rating_log')->delete();
        
        \DB::table('recipe_recipe_rating_log')->insert(array (
            0 => 
            array (
                'id' => 1,
                'recipe_id' => 3,
                'ip' => '::1',
                'rating' => 5,
                'created_at' => '2020-07-07 16:19:58',
                'updated_at' => '2020-07-07 16:19:58',
            ),
            1 => 
            array (
                'id' => 2,
                'recipe_id' => 3,
                'ip' => '::1',
                'rating' => 5,
                'created_at' => '2020-07-07 16:22:31',
                'updated_at' => '2020-07-07 16:22:31',
            ),
            2 => 
            array (
                'id' => 3,
                'recipe_id' => 3,
                'ip' => '::1',
                'rating' => 5,
                'created_at' => '2020-07-07 16:23:43',
                'updated_at' => '2020-07-07 16:23:43',
            ),
            3 => 
            array (
                'id' => 4,
                'recipe_id' => 3,
                'ip' => '::1',
                'rating' => 4,
                'created_at' => '2020-07-07 16:24:48',
                'updated_at' => '2020-07-07 16:24:48',
            ),
            4 => 
            array (
                'id' => 5,
                'recipe_id' => 3,
                'ip' => '::1',
                'rating' => 5,
                'created_at' => '2020-07-07 16:25:19',
                'updated_at' => '2020-07-07 16:25:19',
            ),
            5 => 
            array (
                'id' => 6,
                'recipe_id' => 3,
                'ip' => '::1',
                'rating' => 3,
                'created_at' => '2020-07-07 16:25:32',
                'updated_at' => '2020-07-07 16:25:32',
            ),
            6 => 
            array (
                'id' => 7,
                'recipe_id' => 3,
                'ip' => '::1',
                'rating' => 1,
                'created_at' => '2020-07-07 16:25:40',
                'updated_at' => '2020-07-07 16:25:40',
            ),
            7 => 
            array (
                'id' => 8,
                'recipe_id' => 185,
                'ip' => '::1',
                'rating' => 5,
                'created_at' => '2020-07-07 16:41:29',
                'updated_at' => '2020-07-07 16:41:29',
            ),
            8 => 
            array (
                'id' => 9,
                'recipe_id' => 189,
                'ip' => '::1',
                'rating' => 4,
                'created_at' => '2020-07-07 16:46:36',
                'updated_at' => '2020-07-07 16:46:36',
            ),
            9 => 
            array (
                'id' => 10,
                'recipe_id' => 1860,
                'ip' => '::1',
                'rating' => 5,
                'created_at' => '2020-07-18 16:53:16',
                'updated_at' => '2020-07-18 16:53:16',
            ),
            10 => 
            array (
                'id' => 11,
                'recipe_id' => 2084,
                'ip' => '::1',
                'rating' => 5,
                'created_at' => '2020-07-31 19:23:42',
                'updated_at' => '2020-07-31 19:23:42',
            ),
            11 => 
            array (
                'id' => 12,
                'recipe_id' => 8666,
                'ip' => '127.0.0.1',
                'rating' => 3,
                'created_at' => '2020-08-01 09:54:13',
                'updated_at' => '2020-08-01 09:54:13',
            ),
            12 => 
            array (
                'id' => 13,
                'recipe_id' => 8657,
                'ip' => '127.0.0.1',
                'rating' => 5,
                'created_at' => '2020-08-01 09:56:17',
                'updated_at' => '2020-08-01 09:56:17',
            ),
            13 => 
            array (
                'id' => 14,
                'recipe_id' => 8653,
                'ip' => '::1',
                'rating' => 4,
                'created_at' => '2020-08-01 09:59:10',
                'updated_at' => '2020-08-01 09:59:10',
            ),
        ));
        
        
    }
}
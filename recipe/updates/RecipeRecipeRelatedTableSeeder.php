<?php namespace recipe\Recipe\Updates;

use Seeder;

class RecipeRecipeRelatedTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('recipe_recipe_related')->delete();
        
        \DB::table('recipe_recipe_related')->insert(array (
            0 => 
            array (
                'recipe_id' => 1,
                'related_id' => 3,
            ),
            1 => 
            array (
                'recipe_id' => 10,
                'related_id' => 1,
            ),
            2 => 
            array (
                'recipe_id' => 10,
                'related_id' => 3,
            ),
            3 => 
            array (
                'recipe_id' => 13,
                'related_id' => 30,
            ),
            4 => 
            array (
                'recipe_id' => 13,
                'related_id' => 186,
            ),
            5 => 
            array (
                'recipe_id' => 13,
                'related_id' => 192,
            ),
            6 => 
            array (
                'recipe_id' => 189,
                'related_id' => 190,
            ),
            7 => 
            array (
                'recipe_id' => 189,
                'related_id' => 191,
            ),
            8 => 
            array (
                'recipe_id' => 189,
                'related_id' => 192,
            ),
            9 => 
            array (
                'recipe_id' => 190,
                'related_id' => 189,
            ),
            10 => 
            array (
                'recipe_id' => 190,
                'related_id' => 191,
            ),
            11 => 
            array (
                'recipe_id' => 190,
                'related_id' => 192,
            ),
            12 => 
            array (
                'recipe_id' => 191,
                'related_id' => 189,
            ),
            13 => 
            array (
                'recipe_id' => 191,
                'related_id' => 190,
            ),
            14 => 
            array (
                'recipe_id' => 191,
                'related_id' => 192,
            ),
            15 => 
            array (
                'recipe_id' => 192,
                'related_id' => 189,
            ),
            16 => 
            array (
                'recipe_id' => 192,
                'related_id' => 190,
            ),
            17 => 
            array (
                'recipe_id' => 192,
                'related_id' => 191,
            ),
            18 => 
            array (
                'recipe_id' => 1858,
                'related_id' => 6000,
            ),
            19 => 
            array (
                'recipe_id' => 1858,
                'related_id' => 8649,
            ),
            20 => 
            array (
                'recipe_id' => 1858,
                'related_id' => 8657,
            ),
            21 => 
            array (
                'recipe_id' => 2028,
                'related_id' => 7934,
            ),
            22 => 
            array (
                'recipe_id' => 2028,
                'related_id' => 8615,
            ),
            23 => 
            array (
                'recipe_id' => 2028,
                'related_id' => 8649,
            ),
        ));
        
        
    }
}
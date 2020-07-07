<?php namespace recipe\Recipe\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRecipeRecipeRecipe15 extends Migration
{
    public function up()
    {
        Schema::table('recipe_recipe_recipe', function($table)
        {
            $table->integer('total_votes')->default(0);
            $table->integer('total_rating')->default(0);
        });
    }
    
    public function down()
    {
        Schema::table('recipe_recipe_recipe', function($table)
        {
            $table->dropColumn('total_votes');
            $table->dropColumn('total_rating');
        });
    }
}
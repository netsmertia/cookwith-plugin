<?php namespace recipe\Recipe\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRecipeRecipeRecipe6 extends Migration
{
    public function up()
    {
        Schema::table('recipe_recipe_recipe', function($table)
        {
            $table->text('context')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('recipe_recipe_recipe', function($table)
        {
            $table->dropColumn('context');
        });
    }
}

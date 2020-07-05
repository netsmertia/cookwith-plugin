<?php namespace recipe\Recipe\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRecipeRecipeRecipe4 extends Migration
{
    public function up()
    {
        Schema::table('recipe_recipe_recipe', function($table)
        {
            $table->string('slug', 191)->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('recipe_recipe_recipe', function($table)
        {
            $table->text('slug')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
}

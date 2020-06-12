<?php namespace recipe\Recipe\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateRecipeRecipeCategoryRecipe extends Migration
{
    public function up()
    {
        Schema::create('recipe_recipe_category_recipe', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('category_id');
            $table->integer('recipe_id');
            $table->primary(['category_id','recipe_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('recipe_recipe_category_recipe');
    }
}

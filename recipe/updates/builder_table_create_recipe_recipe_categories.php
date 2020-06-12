<?php namespace recipe\Recipe\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateRecipeRecipeCategories extends Migration
{
    public function up()
    {
        Schema::create('recipe_recipe_categories', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('category_title');
            $table->string('category_slug')->unique();
            $table->text('description')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('recipe_recipe_categories');
    }
}

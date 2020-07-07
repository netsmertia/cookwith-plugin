<?php namespace recipe\Recipe\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateRecipeRecipeRatingLog extends Migration
{
    public function up()
    {
        Schema::create('recipe_recipe_rating_log', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('recipe_id');
            $table->string('ip')->nullable();
            $table->integer('rating')->default(0);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('recipe_recipe_rating_log');
    }
}
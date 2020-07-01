<?php namespace recipe\Recipe\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateRecipeRecipeRecipe extends Migration
{
    public function up()
    {
        Schema::create('recipe_recipe_recipe', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('img')->nullable();
            $table->text('recipe');
            $table->string('title');
            $table->time('time')->nullable();
            $table->integer('serve')->default(0);
            $table->decimal('rating', 10, 0)->default(3);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('recipe_recipe_recipe');
    }
}
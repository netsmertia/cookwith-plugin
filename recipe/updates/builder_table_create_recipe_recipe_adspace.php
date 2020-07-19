<?php namespace recipe\Recipe\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateRecipeRecipeAdspace extends Migration
{
    public function up()
    {
        Schema::create('recipe_recipe_adspace', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('is_active')->default(1);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->string('space_code');
            $table->string('space_type', 10)->default('H');
            $table->string('title');
            $table->boolean('is_random_ad')->default(1);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('recipe_recipe_adspace');
    }
}

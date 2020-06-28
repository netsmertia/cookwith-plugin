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
            $table->integer('ad_id')->default(0);
            $table->integer('is_active')->default(1);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->string('space_code');
            $table->string('title');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('recipe_recipe_adspace');
    }
}

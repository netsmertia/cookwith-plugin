<?php namespace recipe\Recipe\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateRecipeRecipeAds extends Migration
{
    public function up()
    {
        Schema::create('recipe_recipe_ads', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('ad_id');
            $table->string('ad_type')->unique();
            $table->text('content')->nullable();
            $table->string('container_css')->nullable();
            $table->string('url')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('recipe_recipe_ads');
    }
}

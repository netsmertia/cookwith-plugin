<?php namespace recipe\Recipe\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateRecipeRecipeAdsStats extends Migration
{
    public function up()
    {
        Schema::create('recipe_recipe_ads_stats', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('ads_id')->unsigned();
            $table->integer('adspace_id')->unsigned();
            $table->string('action')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->string('browser');
            $table->string('ip');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('recipe_recipe_ads_stats');
    }
}

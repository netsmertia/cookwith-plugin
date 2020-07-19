<?php namespace recipe\Recipe\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateRecipeRecipeAdsAdspace extends Migration
{
    public function up()
    {
        Schema::create('recipe_recipe_ads_adspace', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('ad_id')->unsigned();
            $table->integer('ad_space_id')->unsigned();
            $table->string('space_type')->default('H');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->primary(['ad_id','ad_space_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('recipe_recipe_ads_adspace');
    }
}
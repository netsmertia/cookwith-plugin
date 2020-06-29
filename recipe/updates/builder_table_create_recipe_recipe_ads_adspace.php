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
            $table->integer('ad_id');
            $table->integer('adspace_id');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->primary(['ad_id','adspace_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('recipe_recipe_ads_adspace');
    }
}

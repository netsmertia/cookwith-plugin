<?php namespace Recipe\Recipe\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateAdsStatsTable extends Migration
{
    public function up()
    {
        Schema::create('recipe_recipe_ads_stats', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('recipe_recipe_ads_stats');
    }
}

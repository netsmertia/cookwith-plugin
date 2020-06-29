<?php namespace recipe\Recipe\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRecipeRecipeAds4 extends Migration
{
    public function up()
    {
        Schema::table('recipe_recipe_ads', function($table)
        {
            $table->boolean('is_active')->default(true);
            $table->dropColumn('ad_type');
            $table->dropColumn('ad_space_id');
        });
    }
    
    public function down()
    {
        Schema::table('recipe_recipe_ads', function($table)
        {
            $table->dropColumn('is_active');
            $table->string('ad_type', 191);
            $table->integer('ad_space_id')->default(0);
        });
    }
}

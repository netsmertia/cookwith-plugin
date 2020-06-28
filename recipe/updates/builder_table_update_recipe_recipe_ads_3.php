<?php namespace recipe\Recipe\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRecipeRecipeAds3 extends Migration
{
    public function up()
    {
        Schema::table('recipe_recipe_ads', function($table)
        {
            $table->renameColumn('adspace_id', 'ad_space_id');
        });
    }
    
    public function down()
    {
        Schema::table('recipe_recipe_ads', function($table)
        {
            $table->renameColumn('ad_space_id', 'adspace_id');
        });
    }
}

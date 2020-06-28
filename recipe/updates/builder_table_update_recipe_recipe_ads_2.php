<?php namespace recipe\Recipe\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRecipeRecipeAds2 extends Migration
{
    public function up()
    {
        Schema::table('recipe_recipe_ads', function($table)
        {
            $table->integer('adspace_id')->default(0);
        });
    }
    
    public function down()
    {
        Schema::table('recipe_recipe_ads', function($table)
        {
            $table->dropColumn('adspace_id');
        });
    }
}

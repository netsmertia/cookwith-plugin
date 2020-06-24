<?php namespace recipe\Recipe\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRecipeRecipeAds extends Migration
{
    public function up()
    {
        Schema::table('recipe_recipe_ads', function($table)
        {
            $table->boolean('is_image')->default(0);
        });
    }
    
    public function down()
    {
        Schema::table('recipe_recipe_ads', function($table)
        {
            $table->dropColumn('is_image');
        });
    }
}

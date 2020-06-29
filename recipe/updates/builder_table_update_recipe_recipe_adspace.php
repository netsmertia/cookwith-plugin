<?php namespace recipe\Recipe\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRecipeRecipeAdspace extends Migration
{
    public function up()
    {
        Schema::table('recipe_recipe_adspace', function($table)
        {
            $table->boolean('is_random_ad')->default(1);
        });
    }
    
    public function down()
    {
        Schema::table('recipe_recipe_adspace', function($table)
        {
            $table->dropColumn('is_random_ad');
        });
    }
}

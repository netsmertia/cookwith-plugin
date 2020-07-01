<?php namespace recipe\Recipe\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRecipeRecipeAdspace2 extends Migration
{
    public function up()
    {
        Schema::table('recipe_recipe_adspace', function($table)
        {
            $table->string('space_type')->default('H');
            $table->dropColumn('ad_id');
        });
    }
    
    public function down()
    {
        Schema::table('recipe_recipe_adspace', function($table)
        {
            $table->dropColumn('space_type');
            $table->integer('ad_id')->default(0);
        });
    }
}
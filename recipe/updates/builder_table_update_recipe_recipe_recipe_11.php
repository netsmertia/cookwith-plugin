<?php namespace recipe\Recipe\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRecipeRecipeRecipe11 extends Migration
{
    public function up()
    {
        Schema::table('recipe_recipe_recipe', function($table)
        {
            $table->text('directions')->nullable();
            $table->string('seo_page_title')->nullable();
            $table->text('seo_metadescription')->nullable();
            $table->string('seo_headline')->nullable();
            $table->string('backup_recipe_id')->nullable();
            $table->integer('status');
        });
    }
    
    public function down()
    {
        Schema::table('recipe_recipe_recipe', function($table)
        {
            $table->dropColumn('directions');
            $table->dropColumn('seo_page_title');
            $table->dropColumn('seo_metadescription');
            $table->dropColumn('seo_headline');
            $table->dropColumn('backup_recipe_id');
            $table->dropColumn('status');
        });
    }
}

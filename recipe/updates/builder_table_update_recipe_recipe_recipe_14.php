<?php namespace recipe\Recipe\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRecipeRecipeRecipe14 extends Migration
{
    public function up()
    {
        Schema::table('recipe_recipe_recipe', function($table)
        {
            $table->text('recipe')->nullable()->change();
            $table->integer('status')->default(0)->change();
        });
    }
    
    public function down()
    {
        Schema::table('recipe_recipe_recipe', function($table)
        {
            $table->text('recipe')->nullable(false)->change();
            $table->integer('status')->default(null)->change();
        });
    }
}

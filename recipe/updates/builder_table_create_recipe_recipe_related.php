<?php namespace recipe\Recipe\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateRecipeRecipeRelated extends Migration
{
    public function up()
    {
        Schema::create('recipe_recipe_related', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('recipe_id');
            $table->integer('related_id');
            $table->primary(['recipe_id','related_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('recipe_recipe_related');
    }
}

<?php namespace recipe\Recipe\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateRecipeRecipeRecomanded extends Migration
{
    public function up()
    {
        Schema::create('recipe_recipe_recomanded', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('recipe_id');
            $table->integer('recommand_id');
            $table->boolean('is_active')->default(1);
            $table->timestamp('deleted_at')->nullable();
            $table->primary(['recipe_id','recommand_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('recipe_recipe_recomanded');
    }
}

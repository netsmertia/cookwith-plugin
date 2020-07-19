<?php namespace recipe\Recipe\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateRecipeRecipeRecipe extends Migration
{
    public function up()
    {
        Schema::create('recipe_recipe_recipe', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title');
            $table->string('slug', 200)->unique();
            $table->text('content')->nullable();

            $table->string('time')->nullable();
            $table->string('serve')->nullable();


            $table->text('video')->nullable();
            $table->text('directions')->nullable();
            $table->text('ingredients')->nullable();
            $table->text('directions_legacy')->nullable();
            $table->text('ingredients_legacy')->nullable();

            $table->string('recipe_type')->default('TEXT');

            $table->decimal('rating', 10, 0)->default(3);
            $table->integer('total_votes')->default(0);
            $table->integer('total_rating')->default(0);

            $table->boolean('recipe_of_the_day')->default(0);
            $table->boolean('is_published')->default(0);


            $table->integer('views')->default(0);
            $table->string('thumb')->nullable();
            $table->integer('translate_id')->nullable()->unsigned();
            $table->string('backup_recipe_id')->nullable();

            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();

            $table->index('title');
            $table->index('slug');
            $table->index('created_at');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('recipe_recipe_recipe');
    }
}
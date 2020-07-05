<?php namespace recipe\Recipe\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class Migration1033 extends Migration
{
public function up()
    {
        Schema::table('recipe_recipe_recipe', function($table)
        {
            $table->index('title');
            $table->index('slug');
            $table->index('created_at');
        });
    }
    
    public function down()
    {
        Schema::table('recipe_recipe_recipe', function($table)
        {
            $table->dropIndex('title');
            $table->dropIndex('slug');
            $table->dropIndex('created_at');
        });
    }
}
<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('articles', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('title');
            $table->string('slug')->nullable();
            $table->text('body')->nullable();
            $table->string('image')->nullable();
            $table->integer('user_id');
            $table->integer('created_at');
            $table->integer('updated_at');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('articles');
	}

}

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('pages', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('title');
            $table->string('slug')->nullable();
            $table->text('body')->nullable();
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
		Schema::drop('pages');
	}

}

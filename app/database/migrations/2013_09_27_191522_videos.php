<?php

use Illuminate\Database\Migrations\Migration;

class Videos extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('videos', function($table)
    	{
    		$table->engine = 'InnoDB';
			$table->increments('id');
			$table->text('titulo');
			$table->string('url');
			$table->timestamps();
		}); 
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('videos');
	}

}
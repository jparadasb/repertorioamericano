<?php

use Illuminate\Database\Migrations\Migration;

class Temas extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('temas', function($table)
    		{
    		$table->engine = 'InnoDB';
			$table->increments('id');
			$table->string('model');
			$table->string('tabla_name');
			$table->string('real_name');
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
		Schema::drop('temas');
	}

}
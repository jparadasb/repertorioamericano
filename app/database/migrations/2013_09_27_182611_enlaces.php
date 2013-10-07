<?php

use Illuminate\Database\Migrations\Migration;

class Enlaces extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('enlaces', function($table)
    		{
    		$table->engine = 'InnoDB';
			$table->increments('id');
			$table->string('real_name');
			$table->string('tag');
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
		Schema::drop('enlaces');
	}

}
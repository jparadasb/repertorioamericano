<?php

use Illuminate\Database\Migrations\Migration;

class Sections extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sections', function($table)
    		{
    		$table->engine = 'InnoDB';
			$table->increments('id');
			$table->string('html_label')->unique();
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
		Schema::drop('sections');
	}

}
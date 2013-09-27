<?php

use Illuminate\Database\Migrations\Migration;

class OtrasPub extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('otras', function($table)
    	{
    		$table->engine = 'InnoDB';
			$table->increments('id');
			$table->text('title_pub');
			$table->string('dir_pdf');
			$table->integer('click_num');
			$table->string('dir_portada');
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
		Schema::drop('otras');
	}

}
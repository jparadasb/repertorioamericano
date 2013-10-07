<?php

use Illuminate\Database\Migrations\Migration;

class Otras extends Migration {

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
			$table->string('dir_pdf')->unique();
			$table->integer('click_num');
			$table->string('dir_portada')->unique();
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
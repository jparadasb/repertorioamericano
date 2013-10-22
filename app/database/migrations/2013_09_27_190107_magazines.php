<?php

use Illuminate\Database\Migrations\Migration;

class Magazines extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('magazines', function($table)
    	{
    		$table->engine = 'InnoDB';
			$table->increments('id');
			$table->integer('num_edi')->unique();
			$table->string('topic_name');
			$table->date('public_date')->unique();
			$table->string('dir_pdf');
			$table->string('dir_portada');
			$table->text('editorial');
			$table->integer('click_num');
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
		Schema::drop('magazines');
	}

}
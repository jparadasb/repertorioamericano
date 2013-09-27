<?php

use Illuminate\Database\Migrations\Migration;

class Contributors extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('contributors', function($table)
    		{
    			$table->engine = 'InnoDB';
				$table->increments('id');
				$table->text('real_name');
				$table->string('dir_photo');
				$table->text('txt_col');
				$table->integer('view_num');
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
		Schema::drop('contributors');
	}

}
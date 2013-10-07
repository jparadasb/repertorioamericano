<?php

use Illuminate\Database\Migrations\Migration;

class MagazineSection extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('magazine_section', function($table)
    		{
				$table->engine = 'InnoDB';
				$table->string('dir_pdf')->unique();
				$table->integer('magazine_id')->unsigned();
				$table->integer('section_id')->unsigned();
				$table->integer('click_num');
				$table->timestamps();
				$table->primary( array( 'magazine_id', 'section_id' ) );
				$table->foreign( 'magazine_id' )->references( 'id' )->on( 'magazines' );
				$table->foreign( 'section_id' )->references( 'id' )->on( 'sections' );
			});

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('magazine_section');
	}

}
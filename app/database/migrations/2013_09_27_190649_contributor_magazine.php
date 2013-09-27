<?php

use Illuminate\Database\Migrations\Migration;

class ContributorMagazine extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('contributor_magazine', function($table)
    		{
    			$table->engine = 'InnoDB';
				$table->increments('id');
				$table->integer('magazine_id')->unsigned();
				$table->integer('contributor_id')->unsigned();
				$table->timestamps();
				$table->foreign( 'magazine_id' )->references( 'id' )->on( 'magazines' );
				$table->foreign( 'contributor_id' )->references( 'id' )->on( 'contributors' );
			});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('contributor_magazine');
	}

}
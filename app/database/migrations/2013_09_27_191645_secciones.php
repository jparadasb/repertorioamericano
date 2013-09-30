<?php

use Illuminate\Database\Migrations\Migration;

class Secciones extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('filosofias', function($table)
    		{
	    		$table->engine = 'InnoDB';
				$table->increments('id');
				$table->boolean('state');
				$table->string('dir_pdf')->unique();
				$table->integer('magazine_id')->unsigned();
				$table->integer('click_num');
				$table->timestamps();
				$table->foreign( 'magazine_id' )->references( 'id' )->on( 'magazines' );
			});
		Schema::create('anfictionias', function($table)
    		{
	    		$table->engine = 'InnoDB';
				$table->increments('id');
				$table->boolean('state');
				$table->string('dir_pdf')->unique();
				$table->integer('magazine_id')->unsigned();
				$table->integer('click_num');
				$table->timestamps();
				$table->foreign( 'magazine_id' )->references( 'id' )->on( 'magazines' );
			});
		Schema::create('arqueologias', function($table)
    		{
	    		$table->engine = 'InnoDB';
		    	$table->increments('id');
				$table->boolean('state');
				$table->string('dir_pdf')->unique();
				$table->integer('magazine_id')->unsigned();
				$table->integer('click_num');
				$table->timestamps();
				$table->foreign( 'magazine_id' )->references( 'id' )->on( 'magazines' );
			});
		Schema::create('artes', function($table)
    		{
	    		$table->engine = 'InnoDB';
				$table->increments('id');
				$table->boolean('state');
				$table->string('dir_pdf')->unique();
				$table->integer('magazine_id')->unsigned();
				$table->integer('click_num');
				$table->timestamps();
				$table->foreign( 'magazine_id' )->references( 'id' )->on( 'magazines' );
			});
		Schema::create('boletines', function($table)
    		{
	    		$table->engine = 'InnoDB';
				$table->increments('id');
				$table->boolean('state');
				$table->string('dir_pdf')->unique();
				$table->integer('magazine_id')->unsigned();
				$table->integer('click_num');
				$table->timestamps();
				$table->foreign( 'magazine_id' )->references( 'id' )->on( 'magazines' );
			});
		Schema::create('ciencias', function($table)
    		{
	    		$table->engine = 'InnoDB';
				$table->increments('id');
				$table->boolean('state');
				$table->string('dir_pdf')->unique();
				$table->integer('magazine_id')->unsigned();
				$table->integer('click_num');
				$table->timestamps();
				$table->foreign( 'magazine_id' )->references( 'id' )->on( 'magazines' );
			});
		Schema::create('criticas', function($table)
    		{
	    		$table->engine = 'InnoDB';
				$table->increments('id');
				$table->boolean('state');
				$table->string('dir_pdf')->unique();
				$table->integer('magazine_id')->unsigned();
				$table->integer('click_num');
				$table->timestamps();
				$table->foreign( 'magazine_id' )->references( 'id' )->on( 'magazines' );
			});
		Schema::create('economias', function($table)
    		{
	    		$table->engine = 'InnoDB';
				$table->increments('id');
				$table->boolean('state');
				$table->string('dir_pdf')->unique();
				$table->integer('magazine_id')->unsigned();
				$table->integer('click_num');
				$table->timestamps();
				$table->foreign( 'magazine_id' )->references( 'id' )->on( 'magazines' );
			});
		Schema::create('editoriales', function($table)
    		{
	    		$table->engine = 'InnoDB';
				$table->increments('id');
				$table->boolean('state');
				$table->string('dir_pdf')->unique();
				$table->text('txt_editorial');
				$table->integer('magazine_id')->unsigned();
				$table->integer('click_num');
				$table->timestamps();
				$table->foreign( 'magazine_id' )->references( 'id' )->on( 'magazines' );
			});
		Schema::create('educaciones', function($table)
    		{
	    		$table->engine = 'InnoDB';
				$table->increments('id');
				$table->boolean('state');
				$table->string('dir_pdf')->unique();
				$table->integer('magazine_id')->unsigned();
				$table->integer('click_num');
				$table->timestamps();
				$table->foreign( 'magazine_id' )->references( 'id' )->on( 'magazines' );
			});
		Schema::create('entrevistas', function($table)
    		{
	    		$table->engine = 'InnoDB';
				$table->increments('id');
				$table->boolean('state');
				$table->string('dir_pdf')->unique();
				$table->integer('magazine_id')->unsigned();
				$table->integer('click_num');
				$table->timestamps();
				$table->foreign( 'magazine_id' )->references( 'id' )->on( 'magazines' );
			});
		Schema::create('filologias', function($table)
    		{
	    		$table->engine = 'InnoDB';
				$table->increments('id');
				$table->boolean('state');
				$table->string('dir_pdf')->unique();
				$table->integer('magazine_id')->unsigned();
				$table->integer('click_num');
				$table->timestamps();
				$table->foreign( 'magazine_id' )->references( 'id' )->on( 'magazines' );
			});
		Schema::create('geopoliticas', function($table)
    		{
	    		$table->engine = 'InnoDB';
				$table->increments('id');
				$table->boolean('state');
				$table->string('dir_pdf')->unique();
				$table->integer('magazine_id')->unsigned();
				$table->integer('click_num');
				$table->timestamps();
				$table->foreign( 'magazine_id' )->references( 'id' )->on( 'magazines' );
			});
		Schema::create('americas', function($table)
    		{
	    		$table->engine = 'InnoDB';
				$table->increments('id');
				$table->boolean('state');
				$table->string('dir_pdf')->unique();
				$table->integer('magazine_id')->unsigned();
				$table->integer('click_num');
				$table->timestamps();
				$table->foreign( 'magazine_id' )->references( 'id' )->on( 'magazines' );
			});
		Schema::create('historietas', function($table)
    		{
	    		$table->engine = 'InnoDB';
				$table->increments('id');
				$table->boolean('state');
				$table->string('dir_pdf')->unique();
				$table->integer('magazine_id')->unsigned();
				$table->integer('click_num');
				$table->timestamps();
				$table->foreign( 'magazine_id' )->references( 'id' )->on( 'magazines' );
			});
		Schema::create('literaturas', function($table)
    		{
	    		$table->engine = 'InnoDB';
				$table->increments('id');
				$table->boolean('state');
				$table->string('dir_pdf')->unique();
				$table->integer('magazine_id')->unsigned();
				$table->integer('click_num');
				$table->timestamps();
				$table->foreign( 'magazine_id' )->references( 'id' )->on( 'magazines' );
			});
		Schema::create('musicas', function($table)
    		{
	    		$table->engine = 'InnoDB';
				$table->increments('id');
				$table->boolean('state');
				$table->string('dir_pdf')->unique();
				$table->integer('magazine_id')->unsigned();
				$table->integer('click_num');
				$table->timestamps();
				$table->foreign( 'magazine_id' )->references( 'id' )->on( 'magazines' );
			});
		Schema::create('participaciones', function($table)
    		{
	    		$table->engine = 'InnoDB';
				$table->increments('id');
				$table->boolean('state');
				$table->string('dir_pdf')->unique();
				$table->integer('magazine_id')->unsigned();
				$table->integer('click_num');
				$table->timestamps();
				$table->foreign( 'magazine_id' )->references( 'id' )->on( 'magazines' );
			});
		Schema::create('recursos', function($table)
    		{
	    		$table->engine = 'InnoDB';
				$table->increments('id');
				$table->boolean('state');
				$table->string('dir_pdf')->unique();
				$table->integer('magazine_id')->unsigned();
				$table->integer('click_num');
				$table->timestamps();
				$table->foreign( 'magazine_id' )->references( 'id' )->on( 'magazines' );
			});
		Schema::create('ritos', function($table)
    		{
	    		$table->engine = 'InnoDB';
				$table->increments('id');
				$table->boolean('state');
				$table->string('dir_pdf')->unique();
				$table->integer('magazine_id')->unsigned();
				$table->integer('click_num');
				$table->timestamps();
				$table->foreign( 'magazine_id' )->references( 'id' )->on( 'magazines' );
			});
		Schema::create('humanos', function($table)
    		{
	    		$table->engine = 'InnoDB';
				$table->increments('id');
				$table->boolean('state');
				$table->string('dir_pdf')->unique();
				$table->integer('magazine_id')->unsigned();
				$table->integer('click_num');
				$table->timestamps();
				$table->foreign( 'magazine_id' )->references( 'id' )->on( 'magazines' );
			});
		Schema::create('sociologias', function($table)
    		{
	    		$table->engine = 'InnoDB';
				$table->increments('id');
				$table->boolean('state');
				$table->string('dir_pdf')->unique();
				$table->integer('magazine_id')->unsigned();
				$table->integer('click_num');
				$table->timestamps();
				$table->foreign( 'magazine_id' )->references( 'id' )->on( 'magazines' );
			});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('filosofias');
		Schema::drop('anfictionias');
		Schema::drop('arqueologias');
		Schema::drop('artes');
		Schema::drop('boletines');
		Schema::drop('ciencias');
		Schema::drop('criticas');
		Schema::drop('economias');
		Schema::drop('editoriales');
		Schema::drop('educaciones');
		Schema::drop('entrevistas');
		Schema::drop('filologias');
		Schema::drop('geopoliticas');
		Schema::drop('americas');
		Schema::drop('historietas');
		Schema::drop('literaturas');
		Schema::drop('musicas');
		Schema::drop('participaciones');
		Schema::drop('recursos');
		Schema::drop('ritos');
		Schema::drop('humanos');
		Schema::drop('sociologias');
	}

}
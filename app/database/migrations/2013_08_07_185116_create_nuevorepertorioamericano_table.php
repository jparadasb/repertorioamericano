<?php

use Illuminate\Database\Migrations\Migration;

class CreateNuevorepertorioamericanoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
		public function up()
	{
		Schema::create('temas', function($table)
    		{
    		
			$table->increments('id');
			$table->string('model');
			$table->string('tabla_name');
			$table->string('real_name');
			$table->string('url');

    		});
		Schema::create('magazines', function($table)
    		{
    		
			$table->increments('id');
			$table->integer('num_edi');
			$table->string('topic_name');
			$table->date('public_date')->unique();
			$table->integer('dossier_id');
			$table->string('dir_pdf');
			$table->string('dir_portada');
			$table->timestamps();
			
			
    		});
    		Schema::create('dossiers', function($table)
    		{
	    		$table->increments('id');
			$table->string('real_name');
			
		});
    	Schema::create('filosofias', function($table)
    		{
			$table->increments('id');
			$table->boolean('state');
			$table->string('dir_pdf');
			$table->integer('magazine_id');
			$table->integer('click_num');
		});
		
		/*1*/
		Schema::create('anfictionias', function($table)
    		{
			$table->increments('id');
			$table->boolean('state');
			$table->string('dir_pdf');
			$table->integer('magazine_id');
			$table->integer('click_num');
		});
		Schema::create('arqueologias', function($table)
    		{
	    		$table->increments('id');
			$table->boolean('state');
			$table->string('dir_pdf');
			$table->integer('magazine_id');
			$table->integer('click_num');
		});
		Schema::create('artes', function($table)
    		{
			$table->increments('id');
			$table->boolean('state');
			$table->string('dir_pdf');
			$table->integer('magazine_id');
			$table->integer('click_num');
		});
		Schema::create('boletines', function($table)
    		{
			$table->increments('id');
			$table->boolean('state');
			$table->string('dir_pdf');
			$table->integer('magazine_id');
			$table->integer('click_num');
		});
		Schema::create('ciencias', function($table)
    		{
			$table->increments('id');
			$table->boolean('state');
			$table->string('dir_pdf');
			$table->integer('magazine_id');
			$table->integer('click_num');
		});
		Schema::create('criticas', function($table)
    		{
			$table->increments('id');
			$table->boolean('state');
			$table->string('dir_pdf');
			$table->integer('magazine_id');
			$table->integer('click_num');
		});
		Schema::create('economias', function($table)
    		{
			$table->increments('id');
			$table->boolean('state');
			$table->string('dir_pdf');
			$table->integer('magazine_id');
			$table->integer('click_num');
		});
		Schema::create('editoriales', function($table)
    		{
			$table->increments('id');
			$table->boolean('state');
			$table->text('txt_editorial');
			$table->integer('magazine_id');
			$table->integer('click_num');
		});
		Schema::create('educaciones', function($table)
    		{
			$table->increments('id');
			$table->boolean('state');
			$table->string('dir_pdf');
			$table->integer('magazine_id');
			$table->integer('click_num');
		});
		Schema::create('entrevistas', function($table)
    		{
			$table->increments('id');
			$table->boolean('state');
			$table->string('dir_pdf');
			$table->integer('magazine_id');
			$table->integer('click_num');
		});
		Schema::create('filologias', function($table)
    		{
			$table->increments('id');
			$table->boolean('state');
			$table->string('dir_pdf');
			$table->integer('magazine_id');
			$table->integer('click_num');
		});
		Schema::create('geopoliticas', function($table)
    		{
			$table->increments('id');
			$table->boolean('state');
			$table->string('dir_pdf');
			$table->integer('magazine_id');
			$table->integer('click_num');
		});
		Schema::create('americas', function($table)
    		{
			$table->increments('id');
			$table->boolean('state');
			$table->string('dir_pdf');
			$table->integer('magazine_id');
			$table->integer('click_num');
		});
		Schema::create('historietas', function($table)
    		{
			$table->increments('id');
			$table->boolean('state');
			$table->string('dir_pdf');
			$table->integer('magazine_id');
			$table->integer('click_num');
		});
		Schema::create('literaturas', function($table)
    		{
			$table->increments('id');
			$table->boolean('state');
			$table->string('dir_pdf');
			$table->integer('magazine_id');
			$table->integer('click_num');
		});
		Schema::create('musicas', function($table)
    		{
			$table->increments('id');
			$table->boolean('state');
			$table->string('dir_pdf');
			$table->integer('magazine_id');
			$table->integer('click_num');
		});
		Schema::create('participaciones', function($table)
    		{
			$table->increments('id');
			$table->boolean('state');
			$table->string('dir_pdf');
			$table->integer('magazine_id');
			$table->integer('click_num');
		});
		Schema::create('recursos', function($table)
    		{
			$table->increments('id');
			$table->boolean('state');
			$table->string('dir_pdf');
			$table->integer('magazine_id');
			$table->integer('click_num');
		});
		Schema::create('ritos', function($table)
    		{
			$table->increments('id');
			$table->boolean('state');
			$table->string('dir_pdf');
			$table->integer('magazine_id');
			$table->integer('click_num');
		});
		Schema::create('humanos', function($table)
    		{
			$table->increments('id');
			$table->boolean('state');
			$table->string('dir_pdf');
			$table->integer('magazine_id');
			$table->integer('click_num');
		});
		Schema::create('sociologias', function($table)
    		{
			$table->increments('id');
			$table->boolean('state');
			$table->string('dir_pdf');
			$table->integer('magazine_id');
			$table->integer('click_num');
		}); 
		Schema::create('other_pubs', function($table)
    		{
			$table->increments('id');
			$table->text('title_pub');
			$table->string('dir_pdf');
			$table->integer('click_num');
			$table->timestamps();
		}); 
		Schema::create('contributor_magazines', function($table)
    		{
			$table->increments('id');
			$table->integer('magazine_id');
			$table->integer('contributor_id');
		}); 
		Schema::create('contributors', function($table)
    		{
			$table->increments('id');
			$table->text('real_name');
			$table->string('dir_photo');
			$table->text('txt_col');
			$table->integer('view_num');
		});
		Schema::create('videos', function($table)
    		{
			$table->increments('id');
			$table->text('titulo');
			$table->string('url');
			$table->timestamps();
		}); 
	}



	public function down()
	{
		Schema::drop('filosofias');
		Schema::drop('contributors');
		Schema::drop('contributor_magazines');
		Schema::drop('other_pubs');
		Schema::drop('magazines');
		Schema::drop('dossiers');
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
		Schema::drop('videos');
		Schema::drop('temas');
	}

}

<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();
		   DB::table('magazines')->
insert(
                       
                                array(
                                        'num_edi' => '1',
                                        'topic_name' => 'Civilización caral, ciencia y tecnología',
                                        'public_date'  => '2013-05-01',
                                        'dossier_id' => '2',
                                        'dir_pdf' => 'resources/pdf/nramay2013.pdf',
                                        'dir_portada' => 'resources/photo/portmay2013.png'
                                ));

                   DB::table('editoriales')->insert(
                   	array(
                   	'state' => false,
                   	'txt_editorial' =>'Entre la Biblioteca Ayacucho y la Red de Intelectuales, Artistas y Luchadores Sociales en Defensa de la Humanidad se ha llegado a un convenio mediante el cual estas dos instituciones unen esfuerzos para ampliar sus radios de acción y así cumplir con mayor profundidad los objetivos generales y específicos de las mismas. El convenio tiene por objeto una revista, novedosa y antigua a la vez.
El nuevo repertorio americano denominamos esa revista, en honor de aquella publicación memorable que con el nombre de El repertorio americano publicara Andrés Bello en Londres en 1826 y cuyo objetivo general era dar a conocer, promocionar, el pensamiento, la geografía, las costumbres e idiosincrasia americana en el mundo. Como la revista de Bello, este nuevo repertorio... acoge en sus páginas una variedad de temas enorme, que va desde la educación, las artes, la música, la poesía y la narrativa, hasta la arqueología, la historia de América, la geopolítica, la anfictionía, los recursos naturales, la sociología y la filosofía, sin olvidar las ciencias, el ser humano, los ritos sagrados, la crítica, la economía y la filología y las lenguas, entre otros; porque, a fin de cuentas, nada de lo humano le podrá ser ajeno. 
Todas las ediciones estarán impresas y en digital, y contarán con un formato que facilitará el coleccionismo. Las colaboraciones serán, salvo excepciones, solicitadas a especialistas en la materia a tratar y cada texto podrá ser ilustrado con imágenes que faciliten y agraden la comprensión de la lectura.
Toda revista es al menos un reto y una satisfacción. El nuevo repertorio americano quiere tomar el reto de promover la unión de nuestros pueblos y tener la satisfacción de verlo cumplido. Bienvenidos a nuestra América.
',
			'magazine_id' => '1' 
                   	)
                   	
                   );

                   DB::table('dossiers')->insert(
			array(
				array(
				'real_name' => 'Anfictionía e integración'
				),
				array(
					'real_name' => 'Arqueología'
				),
				array(
					'real_name' => 'Artes'
				),
				array(
					'real_name' => 'Boletín Bibliográfico'
				),
				array(
					'real_name' => 'Ciencia y Botánica'
				),
				array(
					'real_name' => 'Crítica'
				),
				array(
					'real_name' => 'Economía'
				),
				array(
					'real_name' => 'Editorial'
				),
				array(
					'real_name' => 'Educación'
				),
				array(
					'real_name' => 'Entrevista'
				),
				array(
					'real_name' => 'Filología y lenguas'
				),
				array(
					'real_name' => 'Geopolítica'
				),
				array(
					'real_name' => 'Historia de América'
				),
				array(
					'real_name' => 'Historia de la Historieta'
				),
				array(
					'real_name' => 'Literatura'
				),
				array(
					'real_name' => 'Música'
				),
				array(
					'real_name' => 'Política y participación'
				),
				array(
					'real_name' => 'Recursos Naturales'
				),
				array(
					'real_name' => 'Ritos Sagrados'
				),
				array(
					'real_name' => 'El ser humano'
				),
				array(
					'real_name' => 'Sociología'
				),
		));
/*Secciones*/
	DB::table('anfictionias')->insert(
                   	array(
                   		'dir_pdf' => 'resources/secciones/1/anfictionias.pdf',
                   		'state' => true,
                   		'magazine_id' => '1'
                   		));
	DB::table('arqueologias')->insert(
                   	array(
                   		'dir_pdf' => 'resources/secciones/1/arqueologia.pdf',
                   		'state' => true,
                   		'magazine_id' => '1'
                   		));
	DB::table('economias')->insert(
                   	array(
                   		'dir_pdf' => 'resources/secciones/1/economia.pdf',
                   		'state' => true,
                   		'magazine_id' => '1'
                   		));
	DB::table('educaciones')->insert(
                   	array(
                   		'dir_pdf' => 'resources/secciones/1/educacion.pdf',
                   		'state' => true,
                   		'magazine_id' => '1'
                   		));
	DB::table('recursos')->insert(
	                   	array(
	                   		'dir_pdf' => 'resources/secciones/1/recursos.pdf',
	                   		'state' => true,
	                   		'magazine_id' => '1'
	                   		));
	DB::table('geopoliticas')->insert(
	                   	array(
	                   		'dir_pdf' => 'resources/secciones/1/geopolitica.pdf',
	                   		'state' => true,
	                   		'magazine_id' => '1'
	                   		));
	DB::table('americas')->insert(
	                   	array(
	                   		'dir_pdf' => 'resources/secciones/1/historia.pdf',
	                   		'state' => true,
	                   		'magazine_id' => '1'
	                   		));
	DB::table('musicas')->insert(
	                   	array(
	                   		'dir_pdf' => 'resources/secciones/1/musica.pdf',
	                   		'state' => true,
	                   		'magazine_id' => '1'
	                   		));
	DB::table('filosofias')->insert(
	                   	array(
	                   		'dir_pdf' => 'resources/secciones/1/filosofia.pdf',
	                   		'state' => true,
	                   		'magazine_id' => '1'
	                   		));
	DB::table('ritos')->insert(
	                   	array(
	                   		'dir_pdf' => 'resources/secciones/1/ritos.pdf',
	                   		'state' => true,
	                   		'magazine_id' => '1'
	                   		));
	DB::table('humanos')->insert(
	                   	array(
	                   		'dir_pdf' => 'resources/secciones/1/ser.pdf',
	                   		'state' => true,
	                   		'magazine_id' => '1'
	                   		));
	DB::table('temas')->insert(
		array(
						array(
							'model' => 'Anfictionia',
							'tabla_name' => 'anfictionias',
							'real_name' => 'ANFICTIONÍA E INTEGRACIÓN',
							'url' => 'anfictionia-e-integracion'
							 ),
						array(
							'model' => 'Filosofia',
							'tabla_name' => 'filosofias',
							'real_name' => 'FILOLOGÍA Y LENGUAS',
							'url' => 'filosofia'
							 ),
						array(
							'model' => 'Editoriale',
							'tabla_name' => 'editoriales',
							'real_name' => 'EDITORIAL',
							'url' => 'editorial'
							 ),
						array(
							'model' => 'Rito',
							'tabla_name' => 'ritos',
							'real_name' => 'RITOS SAGRADOS',
							'url' => 'ritos-sagrados'
							 ),
						array(
							'model' => 'Recurso',
							'tabla_name' => 'recursos',
							'real_name' => 'RECURSOS NATURALES',
							'url' => 'recursos-naturales'
							 ),
						array(
							'model' => 'Musica',
							'tabla_name' => 'musicas',
							'real_name' => 'MÚSICA',
							'url' => 'musica'
							 ),
						array(
							'model' => 'Historieta',
							'tabla_name' => 'historietas',
							'real_name' => 'HISTORIA DE LA HISTORIETA',
							'url' => 'recursos-naturales'
							 ),
						array(
							'model' => 'Educacione',
							'tabla_name' => 'educaciones',
							'real_name' => 'EDUCACIÓN',
							'url' => 'educacion'
							 ),
						array(
							'model' => 'Participacione',
							'tabla_name' => 'participaciones',
							'real_name' => 'POLÍTICA Y PARTICIPACIÓN',
							'url' => 'politica-y-participacion'
							 ),
						array(
							'model' => 'Geopolitica',
							'tabla_name' => 'geopoliticas',
							'real_name' => 'GEOPOLÍTICA',
							'url' => 'geopolitica'
							 ),
						array(
							'model' => 'Filologia',
							'tabla_name' => 'filologias',
							'real_name' => 'FILOLOGÍA Y LENGUAS',
							'url' => 'filologia'
							 ),
						array(
							'model' => 'Entrevista',
							'tabla_name' => 'entrevistas',
							'real_name' => 'ENTREVISTA',
							'url' => 'entrevista'
							 ),
						array(
							'model' => 'Ciencia',
							'tabla_name' => 'ciencias',
							'real_name' => 'CIENCIA Y BOTÁNICA',
							'url' => 'ciencia-y-botanica'
							 ),
						array(
							'model' => 'Critica',
							'tabla_name' => 'criticas',
							'real_name' => 'CRÍTICA',
							'url' => 'critica'
							 ),
						array(
							'model' => 'Boletine',
							'tabla_name' => 'boletines',
							'real_name' => 'BOLETÍN BIBLIOGRÁFICO',
							'url' => 'boletin-bibliografico'
							 ),
						array(
							'model' => 'Literatura',
							'tabla_name' => 'literaturas',
							'real_name' => 'LITERATURA',
							'url' => 'literatura'
							 ),
						array(
							'model' => 'Arte',
							'tabla_name' => 'artes',
							'real_name' => 'ARTE',
							'url' => 'arte'
							 ),
						array(
							'model' => 'Economia',
							'tabla_name' => 'economias',
							'real_name' => 'ECONOMÍA',
							'url' => 'economia'
							 ),
						array(
							'model' => 'Humano',
							'tabla_name' => 'humanos',
							'real_name' => 'EL SER HUMANO',
							'url' => 'el-ser-humano'
							 ),
						array(
							'model' => 'Arqueologia',
							'tabla_name' => 'arqueologias',
							'real_name' => 'ARQUEOLOGÍA',
							'url' => 'arqueologia'
							 ),
						array(
							'model' => 'America',
							'tabla_name' => 'americas',
							'real_name' => 'HISTORIA DE AMÉRICA',
							'url' => 'historia-de-america'
							 ),
						array(
							'model' => 'Sociologia',
							'tabla_name' => 'sociologias',
							'real_name' => 'SOCIOLOGÍA',
							'url' => 'sociologia'
							 )
						));
		// $this->call('UserTableSeeder');
	}

}
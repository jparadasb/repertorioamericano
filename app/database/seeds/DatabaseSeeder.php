	<?php class DatabaseSeeder extends Seeder 
	{
		/*
		* 
		* 
		Run the database seeds. 
		* 
		* 
		@return void */ 
		public function run() 
		{
			Eloquent::unguard();
			//Llenando tabla de otras publicaciones 
			$this->call('OtrasTableSeeder');
			$this->command->info('Otras table seeded!');
			
			//Llenando tabla de enlaces
			$this->call('EnlacesTableSeeder');
			$this->command->info('Enlaces table seeded!');

			//Llenando tabla de secciones
			$this->call('SectionsTableSeeder');
			$this->command->info('Sections table seeded!');

			//Llenando tabla de Colaboradores
			$this->call('ContributorsTableSeeder');
			$this->command->info('Contributors table seeded!');

			//Llenando la tabla de revistas
			$this->call('MagazinesTableSeeder');
			$this->command->info('Magazines table seeded!');

			//Creando relaciones entre los Colaboradores y la revista precargada
			$this->call('ContributorMagazineTableSeeder');
			$this->command->info('ContributorMagazine table seeded!');

			//Creando relaciones entre las Secciones y la revista
			$this->call('MagazineSectionTableSeeder');
			$this->command->info('MagazineSection table seeded!');			

			$this->call('UsersTableSeeder');
	}
	}

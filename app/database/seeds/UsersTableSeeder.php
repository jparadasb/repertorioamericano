<?php

class UsersTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		// DB::table('users')->truncate();

		$users = array(
			'name'=>'Yelitza', 'last_name'=>'Sulbaran', 'user_name'=>'admin', 'email'=>'sistemas@bibliotecayacucho.gob.ve', 'password'=>Hash::make('fbA&986532')

		);

		// Uncomment the below to run the seeder
		 DB::table('users')->insert($users);
	}

}

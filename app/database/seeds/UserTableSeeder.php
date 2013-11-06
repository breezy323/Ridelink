<?php

class UserTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		// DB::table('user')->truncate();

		User::create(array(
        'admin' => true,
        'email' => 'jleplomet@gmail.com',
        'password' => Hash::make('spitfire'),
        'first_name' => 'Jeff',
        'last_name' => 'Leplomet',
        'gender' => 'male',
        'created_at' => new DateTime,
        'updated_at' => new DateTime
    ));

    User::create(array(
      'email' => 'brian.ceballos@gmail.com',
      'password' => Hash::make('fatboysrule'),
      'first_name' => 'Brian',
      'last_name' => 'Ceballos',
      'created_at' => new DateTime,
      'updated_at' => new DateTime
    ));
	}

}

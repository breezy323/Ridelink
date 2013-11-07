<?php

class UserTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		// DB::table('user')->truncate();

    //Create admin group
    $adminGroup = Sentry::createGroup(array(
      'name' => 'Administrators',
      'permissions' => array(
        'system' => 1
      )
    ));

    //create user
    $user = Sentry::createUser(array(
      'email'     => 'jleplomet@gmail.com',
      'password'  => 'x7qk',
      'activated' => 1
    ));

    $user->addGroup( $adminGroup );

    //create user
    Sentry::createUser(array(
      'email'     => 'brian.ceballos@gmail.com',
      'password'  => 'keepjamesout',
      'activated' => 1
    ));
	}

}


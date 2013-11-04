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

		$this->call('UserTableSeeder');
		$this->call('OrdersTableSeeder');
		$this->call('ProductsTableSeeder');
		$this->call('OrderEntityTableSeeder');
	}

}
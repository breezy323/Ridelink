<?php

class OrderEntityTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		// DB::table('orderentity')->truncate();

		OrderEntity::create(array(
      'order_id' => 1,
      'order_data' => '[{"options":{"toAirport":"yes"}}]',
        'created_at' => new DateTime,
        'updated_at' => new DateTime
    ));

    OrderEntity::create(array(
      'order_id' => 2,
      'order_data' => '[{"options":{"toAirport":"no"}}]',
        'created_at' => new DateTime,
        'updated_at' => new DateTime
    ));

		// Uncomment the below to run the seeder
		// DB::table('orderentity')->insert($orderentity);
	}

}

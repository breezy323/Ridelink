<?php

class OrdersTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		// DB::table('orders')->truncate();

		Order::create(array(
      'user_id' => 1,
      'product_id' => 1,
      'order_entity_id' => 1,
      'order_status' => 'processing',
      'created_at' => new DateTime,
      'updated_at' => new DateTime
    ));

    Order::create(array(
      'user_id' => 2,
      'product_id' => 2,
      'order_entity_id' => 1,
      'order_status' => 'processing',
      'created_at' => new DateTime,
      'updated_at' => new DateTime
    ));
	}

}

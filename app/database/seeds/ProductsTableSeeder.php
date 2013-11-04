<?php

class ProductsTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		// DB::table('products')->truncate();

		Product::create(array(
      'product_name' => 'Car Service 1',
      'product_description' => 'Car Service 1 description.',
      'created_at' => new DateTime,
      'updated_at' => new DateTime
    ));

    Product::create(array(
      'product_name' => 'Car Service 2',
      'product_description' => 'Car Service 2 description.',
      'created_at' => new DateTime,
      'updated_at' => new DateTime
    ));

		// Uncomment the below to run the seeder
		// DB::table('products')->insert($products);
	}

}

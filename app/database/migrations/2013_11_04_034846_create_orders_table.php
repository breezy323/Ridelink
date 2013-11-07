<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('orders', function(Blueprint $table)
		{
			//
			$table->increments('id');
			$table->integer('user_id');
			$table->integer('product_id');
			$table->integer('order_entity_id');
			$table->enum('order_status', array('processing', 'accepted', 'declined', 'complete'))->default('processing');

			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('orders');
	}

}
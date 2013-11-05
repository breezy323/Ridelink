<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function ($table)
		{
			$table->increments('id');
			$table->boolean('admin')->default(false);
			$table->string('email')->unique();
			$table->string('password');
			$table->string('first_name');
			$table->string('last_name');

			$table->enum('gender', array('male', 'female', 'undisclosed'))->default('undisclosed');

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
		Schema::table('users', function(Blueprint $table)
		{
			//
		});
	}

}
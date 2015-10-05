<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBusinessTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('business', function($table)
		{
			$table->increments('id');
			$table->integer('user_id');
			$table->integer('type_id');
			$table->string('name');
			$table->string('old_booking_style');
			$table->string('signup_reason');
			$table->timestamps();
		});

		Schema::create('venue', function($table)
		{
			$table->increments('id');
			$table->integer('business_id');
			$table->longText('address');
			$table->string('city');
			$table->string('state');
			$table->string('country');
			$table->string('phone_number');
			$table->integer('postal_code');
			$table->timestamps();
		});

		Schema::create('business_type', function($table)
		{
			$table->increments('id');
			$table->string('type');
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
		Schema::dropIfExists('business');
		Schema::dropIfExists('venue');
		Schema::dropIfExists('business_type');
	}

}

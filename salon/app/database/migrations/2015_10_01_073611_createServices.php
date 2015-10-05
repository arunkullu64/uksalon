<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServices extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('service_group', function($table)
		{
			$table->increments('id');
			$table->integer('business_id');
			$table->string('name');
			$table->timestamps();
		});

		Schema::create('service_category', function($table)
		{
			$table->increments('id');
			$table->string('name');
			$table->longText('description');
			$table->tinyInteger('active');
			$table->timestamps();
		});
        
        Schema::create('services', function($table)
		{
			$table->increments('id');
			$table->string('title');
			$table->integer('service_group_id');
            $table->integer('business_id');
            $table->integer('service_category_id');
            $table->time('duration');
            $table->double('price');
            $table->string('image');
			$table->longText('description');
			$table->timestamps();
		});
        
        Schema::create('user_booking', function($table)
		{
			$table->increments('id');
			$table->integer('user_id');
            $table->integer('business_id');
            $table->integer('service_id');
            $table->dateTime('booking_date');
			$table->timestamps();
		});

		Schema::table('business', function ($table) {
            $table->string('image');
            $table->string('website');
            $table->string('phone_number');
            $table->string('email');
			$table->longText('description');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('service_group');
		Schema::dropIfExists('service_category');
        Schema::dropIfExists('services');
        Schema::dropIfExists('user_booking');

        Schema::table('business', function($table)
		{
		   	$table->dropColumn('image');
            $table->dropColumn('website');
            $table->dropColumn('phone_number');
            $table->dropColumn('email');
			$table->dropColumn('description');
		});
	}
}

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
		Schema::create('users', function($table)
		{
			$table->increments('id');
			$table->string('fname');
			$table->string('lname');
			$table->string('email');
			$table->string('password');
			$table->integer('role');
			$table->timestamps();
		});
		Schema::create('profile', function($table)
		{
			$table->increments('id');
			$table->integer('user_id');
			$table->string('profile_name');
			$table->enum('gender', array('F', 'M'));
			$table->longText('address');
			$table->string('city');
			$table->string('state');
			$table->string('country');
			$table->string('profile_pic');
			$table->integer('postal_code');
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
		Schema::dropIfExists('users');
		Schema::dropIfExists('profile');
	}

}

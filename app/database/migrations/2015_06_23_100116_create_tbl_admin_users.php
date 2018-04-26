<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblAdminUsers extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tbl_admin_users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('user_name');
			$table->string('password');
			$table->string('email');
			$table->string('code')->nullable();
			$table->string('user_type_id');
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
		Schema::drop('tbl_admin_users');
	}

}

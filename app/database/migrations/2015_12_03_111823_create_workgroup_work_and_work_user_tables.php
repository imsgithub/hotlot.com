<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkgroupWorkAndWorkUserTables extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('workgroups', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
		});
		Schema::create('works', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->integer('workgroup_id')->unsigned();
		});
		Schema::create('work_user', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id')->unsigned();
			$table->integer('work_id')->unsigned();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('work_user');
		Schema::drop('works');
		Schema::drop('workgroups');
	}

}

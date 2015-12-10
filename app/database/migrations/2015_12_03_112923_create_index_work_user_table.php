<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIndexWorkUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('work_user', function(Blueprint $table)
		{
			$table->foreign('user_id')->references('id')->on('users');
			$table->foreign('work_id')->references('id')->on('works');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('work_user', function(Blueprint $table)
		{
			$table->dropForeign('work_user_user_id_foreign');
			$table->dropForeign('work_user_work_id_foreign');
		});
	}

}

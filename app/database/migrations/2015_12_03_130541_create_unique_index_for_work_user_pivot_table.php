<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUniqueIndexForWorkUserPivotTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('work_user', function(Blueprint $table)
		{
			$table->unique(['user_id', 'work_id']);
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
			$table->dropUnique('work_user_user_id_work_id_unique');
		});
	}

}

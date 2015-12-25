<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUniqueIndexToConfirmationsTableForUserId extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('confirmations', function(Blueprint $table)
		{
			$table->unique('user_id');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('confirmations', function(Blueprint $table)
		{
			$table->dropUnique('confirmations_user_id_unique');
		});
	}

}

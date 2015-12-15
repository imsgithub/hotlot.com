<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIndexesToBidsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('bids', function(Blueprint $table)
		{
			$table->foreign('user_id')->references('id')->on('users');
			$table->foreign('cargo_type_id')->references('id')->on('cargo_types');
			$table->foreign('currency_id')->references('id')->on('currencies');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('bids', function(Blueprint $table)
		{
			$table->dropForeign('bids_user_id_foreign');
			$table->dropForeign('bids_cargo_type_id_foreign');
			$table->dropForeign('bids_currency_id_foreign');
		});
	}

}

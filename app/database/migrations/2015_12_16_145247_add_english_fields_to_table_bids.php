<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddEnglishFieldsToTableBids extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('bids', function(Blueprint $table)
		{
			$table->string('en_company_name');
			$table->string('en_user_name');
			$table->string('en_user_surname');
			$table->string('en_user_patronymic');
			$table->text('en_requisites');
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
			$table->dropColumn('en_company_name');
			$table->dropColumn('en_user_name');
			$table->dropColumn('en_user_surname');
			$table->dropColumn('en_user_patronimyc');
			$table->dropColumn('en_requisites');
		});
	}

}

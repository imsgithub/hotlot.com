<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPrimaryAndSecondaryLanguageToContractTypesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('contract_types', function(Blueprint $table)
		{
			$table->string('primary_lang')->default('RU');
			$table->string('secondary_lang')->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('contract_types', function(Blueprint $table)
		{
			$table->dropColumn('primary_lang');
			$table->dropColumn('secondary_lang');
		});
	}

}

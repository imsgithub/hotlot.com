<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldContractTypeToBids extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		if (!Schema::hasTable('contract_types')) {
			Schema::create('contract_types', function(Blueprint $table)
			{
				$table->increments('id');
				$table->string('en_name');
				$table->string('ru_name');
			});
		}
		if (!Schema::hasColumn('bids', 'contract_type_id')) {
			Schema::table('bids', function(Blueprint $table){
				$table->integer('contract_type_id')->unsigned();
			});
		}
		Schema::table('bids', function(Blueprint $table){			
			$table->foreign('contract_type_id')->references('id')->on('contract_types');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('bids', function(Blueprint $table){
			$table->dropForeign('bids_contract_type_id_foreign');
		});
		Schema::drop('contract_type');
	}

}

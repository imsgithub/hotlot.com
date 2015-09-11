<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldsToFormsTableCargoAndAgreementNumbers extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('forms', function(Blueprint $table)
		{
                    $table->integer('agreement_number')->unsigned();//Номер договора
                    $table->integer('cargo_number')->unsigned();//Номер груза
                    $table->date('agreement_date');//Договор от дата
                    $table->date('cargo_date');//Договор-заявка от
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('forms', function(Blueprint $table)
		{
                    $table->dropColumn('agreement_number');
                    $table->dropColumn('cargo_number');
                    $table->dropColumn('agreement_date');
                    $table->dropColumn('cargo_date');
		});
	}

}

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPatronymicAndPhoneFieldsToPersonsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('persons', function(Blueprint $table)
		{
			$table->string('patronymic');
                        $table->string('phone')->index();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('persons', function(Blueprint $table)
		{
			$table->dropColumn('phone');
                        $table->dropColumn('patronymic');
		});
	}

}

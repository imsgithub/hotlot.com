<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldKindOfTransportToFormsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('forms', function(Blueprint $table)
		{
                    $table->string('kind_of_transport')->after('contact_face');
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
                    $table->dropColumn('kind_of_transport');
		});
	}

}

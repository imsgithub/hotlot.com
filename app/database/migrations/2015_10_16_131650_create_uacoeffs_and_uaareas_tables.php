<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUacoeffsAndUaareasTables extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ua_areas', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
		});
                Schema::create('ua_coeffs', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('start_id')->unsigned();
                        $table->integer('end_id')->unsigned();
                        $table->decimal('value', 3, 2);
                        $table->foreign('start_id')->references('id')->on('ua_areas')->onDelete('cascade');
                        $table->foreign('end_id')->references('id')->on('ua_areas')->onDelete('cascade');
                        $table->unique(['start_id', 'end_id']);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
            Schema::drop('ua_coeffs');
            Schema::drop('ua_areas');                
	}

}

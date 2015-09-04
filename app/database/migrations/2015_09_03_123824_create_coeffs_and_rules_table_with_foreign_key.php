<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoeffsAndRulesTableWithForeignKey extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
            Schema::create('coeffs', function(Blueprint $table){
                $table->increments('id');
                $table->string('name');
                $table->string('ru_name');
            });
            Schema::create('rules', function (Blueprint $table){
                $table->increments('id');
                $table->integer('coeff_id')->unsigned();
                $table->string('letter');
                $table->decimal('value', 10, 2);
            });
            Schema::table('rules', function(Blueprint $table){
               $table->foreign('coeff_id')->references('id')->on('coeffs');
            });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
            Schema::table('rules', function(Blueprint $table){
                $table->dropForeign('rules_coeff_id_foreign');
            });
            Schema::drop('rules');
            Schema::drop('coeffs');
	}

}

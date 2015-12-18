<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBidsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bids', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
			$table->double('price', 13, 2);
			$table->string('cargo_name');
			$table->double('cargo_price');
			$table->boolean('insurance');
			$table->decimal('weight', 5, 2);
			$table->decimal('volume', 5, 2);
			$table->integer('number_of_seats')->unsigned();
			$table->text('requirements');
			$table->string('route_from');
			$table->string('route_where');
			$table->datetime('load_datetime');
			$table->string('load_transporter');
			$table->string('load_address');
			$table->string('load_face');
			$table->string('load_phone');
			$table->datetime('unload_datetime');
			$table->string('unload_transporter');
			$table->string('unload_address');
			$table->string('unload_face');
			$table->string('unload_phone');
			$table->text('comment');
			$table->string('company_name');
			$table->string('user_name');
			$table->string('user_surname');
			$table->string('user_patronymic');
			$table->text('requisites');
			$table->string('transport_type');
			$table->integer('cargo_type_id')->unsigned();
			$table->integer('user_id')->unsigned();
			$table->integer('currency_id')->unsigned();
			$table->boolean('user_confirmed');
			$table->string('user_email');
			$table->boolean('admin_confirmed');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('bids');
	}

}

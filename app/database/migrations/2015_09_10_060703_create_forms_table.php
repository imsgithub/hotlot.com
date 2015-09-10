<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('forms', function(Blueprint $table)
		{
			$table->increments('id');
                        $table->integer('user_id')->unsigned();
                        $table->string('transporter');//Перевозчик
                        $table->string('contact_face');//Контактное лицо
                        $table->string('cargo_name');//Наименование груза
                        $table->string('number_of_seats');//Количество мест
                        $table->decimal('volume', 6, 3);//Объем - м3
                        $table->decimal('weight', 5, 3);//Вес нетто - т (масса)
                        $table->string('load_address');//Адрес загрузки
                        $table->string('cc_load_address');//Адрес таможенного оформления загрузки
                        $table->string('unloading_address');//Адрес разгрузки
                        $table->string('cc_unloading_address');//Адрес таможенного оформления разгрузки
                        $table->dateTime('load_datetime');//Дата-время загрузки
                        $table->dateTime('delivery_datetime');//Дата-время разгрузки
                        $table->string('method_of_payment');//Форма оплаты
                        $table->string('payment_term');//Условия оплаты
                        $table->string('additional_conditions');//Дополнительные условия
                        $table->string('car_brand');//Марка авто
                        $table->string('number_am');//№ а/м
                        $table->string('number_pp');//№ п/п
                        $table->string('driver_name');//Имя водителя
                        $table->string('driver_passport');//Паспортные данные водителя
                        $table->string('driver_phone');//Способ связи с водителем
                        $table->boolean('confirmed');//Подтверждение администратором
			$table->timestamps();
                        $table->foreign('user_id')->references('id')->on('users');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('forms');
	}

}

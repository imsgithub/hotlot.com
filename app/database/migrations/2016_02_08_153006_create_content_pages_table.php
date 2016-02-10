<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContentPagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('content_pages', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title');
			$table->string('discription');
			$table->text('content');
			$table->timestamps();
			$table->string('alias')->unique();
			$table->string('keywords');
			$table->string('language',2);
			$table->boolean('published');
			$table->softDeletes();//при создании таблицы руками - поле должно быть по умолчанию NULL
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('content_pages');
	}

}

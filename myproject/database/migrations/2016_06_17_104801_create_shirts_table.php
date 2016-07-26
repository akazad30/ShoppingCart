<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShirtsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('shirts', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
			$table->string('imagePath');
			$table->string('title');
			$table->string('description');
			$table->string('price');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('shirts');
	}

}

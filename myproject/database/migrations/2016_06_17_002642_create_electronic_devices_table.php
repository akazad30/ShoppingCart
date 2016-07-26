<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateElectronicDevicesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('electronic_devices', function(Blueprint $table)
		{
			$table->increments('id');
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
		Schema::drop('electronic_devices');
	}

}

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderTablesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('order_tables', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('order_id');
			$table->string('book_id');
			$table->string('amount');
			$table->string('price');
			$table->string('total');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('order_tables');
	}

}

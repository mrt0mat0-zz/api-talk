<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateZoosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('zoos', function(Blueprint $table)
		{
			$table->increments('id');
	        $table->string('name')->unique();
	        $table->text('description');
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
		Schema::table('zoos', function(Blueprint $table)
		{
			Schema::drop('zoos');
		});
	}

}
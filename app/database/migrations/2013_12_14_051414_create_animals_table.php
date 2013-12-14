<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnimalsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('animals', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('zoo_id');
			$table->integer('animal_type_id');
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
		Schema::table('animals', function(Blueprint $table)
		{
			Schema::drop('animals');
		});
	}

}
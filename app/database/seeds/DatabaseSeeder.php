<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('ZooTableSeeder');
		$this->call('AnimalTableSeeder');
		$this->call('AnimalTypeTableSeeder');
	}

}
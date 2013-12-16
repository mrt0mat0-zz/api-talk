<?php

class UserTableSeeder extends Seeder {
	public function run(){
		DB::table('users')->delete();
		User::create(array(
			'username' => 'testuser',
			'password' => Hash::make('password')
		));
	}
}

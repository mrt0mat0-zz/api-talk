<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return 'Welcome to the API - Credentials are testuser:password';
});

Route::group(array('before' => 'auth.basic'), function(){
	//Zoo methods
	Route::resource('zoo', 'ZooController');
	Route::get('/zoo/{id}/animals', function($id)
	{
		return DB::table('zoos')
        	->leftJoin('animals', 'animals.zoo_id', '=', 'zoos.id')
        ->where('animals.zoo_id', $id)
        ->get();
});

//Animal methods
Route::resource('animal', 'AnimalController');

//AnimalType methods
Route::resource('animal_type', 'AnimalTypeController');
Route::get('/animal_type/{id}/animals', function($id)
{
	return DB::table('animal_types')
        ->leftJoin('animals', 'animal_types.id', '=', 'animals.animal_type_id')
        ->where('animal_types.id', $id)
        ->get();
});
});

<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'DogController@all');

Route::get('/newDog','DogController@new');
Route::post('/newDog','DogController@create');


Route::get('/allDogs','DogController@all');
Route::get('/dog/{id}','DogController@find');
Route::get('/dog/edit/{id}','DogController@get');
Route::post('/dog/edit/{id}','DogController@update');
Route::get('/dog/delete/{id}','DogController@delete');

Route::get('/newVaccine','VaccineController@new');
Route::post('/newVaccine','VaccineController@create');
Route::get('/allVaccinations','VaccineController@all');
Route::get('/vaccine/{id}','VaccineController@find');
Route::get('/vaccine/edit/{id}','VaccineController@get');
Route::post('/vaccine/edit/{id}','VaccineController@update');
Route::get('/vaccine/delete/{id}','VaccineController@delete');

Route::get('/newAdopter','AdopterController@new');
Route::post('/newAdopter','AdopterController@create');
Route::get('/allAdopters','AdopterController@all');
Route::get('/adopter/{id}','AdopterController@find');
Route::get('/adopter/edit/{id}','AdopterController@get');
Route::post('/adopter/edit/{id}','AdopterController@update');
Route::get('/adopter/delete/{id}','AdopterController@delete');

Route::post('addDogVaccine/{id}','DogController@addVaccine');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

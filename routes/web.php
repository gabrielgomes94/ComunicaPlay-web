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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::prefix('fase')->group(function(){
	Route::get('/criar', 'StageController@create')->name('stage.create');
	Route::post('/', 'StageController@store')->name('stage.store');
	Route::get('/index', 'StageController@index')->name('stage.index');
	Route::prefix('{id}')->group(function($id){
		
		Route::get('/mostrar', 'StageController@show')->name('stage.show');
	});
	Route::prefix('{id}/question')->group(function($id){
		Route::get('/', function () {
    		return view('welcome');
		});
		Route::get('/criar', 'QuestionController@create')->name('question.create');
		Route::post('/s', 'QuestionController@store')->name('question.store');
	});	
});
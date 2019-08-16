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

Route::get('home', function () {
    return view('admin/home');
});

Route::get('list','StudentController@studentList');
Route::post('list','StudentController@store');

Route::get('contacts/create','ContactController@create');
Route::post('contacts/','ContactController@store');


//restfull api resource
// Route::get('schools','SchoolController@index');
// Route::get('schools/create','SchoolController@create');
// Route::post('schools','SchoolController@store');
// Route::get('schools/{school}','SchoolController@show');
// Route::get('schools/{school}/edit','SchoolController@edit');
// Route::patch('schools/{school}','SchoolController@update');
// Route::delete('schools/{school}','SchoolController@destroy');

Route::resource('schools','SchoolController');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

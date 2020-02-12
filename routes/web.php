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
Route::get('/students','StudentController@Index')->name('students.index');
Route::get('/students/register','StudentController@Create')->name('students.register');
Route::post('/students/store','StudentController@Store')->name('students.store');
Route::get('/students/{id}/edit','StudentController@edit')->name('students.edit');
Route::put('/students/{id}/update','StudentController@update')->name('students.update');
Route::get('/students/{id}/view','StudentController@show')->name('students.show');
Route::delete('/students/{id}/delete','StudentController@destroy')->name('students.delete');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware();

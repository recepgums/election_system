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
Route::get('/admin', 'AdminController@show')->name('AdminPanel');
Route::get('/candidate', 'ProfileController@show')->name('Profile');
Route::get('/admin/edit/{id}', 'AdminController@edit_page')->name('Edit');
Route::post('/admin/update/{id}', 'AdminController@update')->name('update');
Route::get('/admin/delete/{id}', 'AdminController@delete_user')->name('delete_user');
Route::get('/application/', 'CandidateController@show')->name('application_show');
Route::get('/calendar/', 'ElectionsController@show')->name('calender_show');
Route::post('/calendar_create/', 'ElectionsController@create')->name('create_election');
Route::post('/candidate_create/{id}', 'CandidateController@create')->name('create_candidate');


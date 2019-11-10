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
Route::get('/candidate/{id}', 'ProfileController@show')->name('Profile');
Route::get('/admin/edit/{id}', 'AdminController@edit_page')->name('Edit');
Route::post('/admin/update/{id}', 'AdminController@update')->name('update');
Route::get('/admin/delete/{id}', 'AdminController@delete_user')->name('delete_user');
Route::get('/application/', 'CandidateController@show')->name('application_show');
Route::get('/calendar/', 'ElectionsController@show')->name('calender_show');
Route::post('/calendar_create/', 'ElectionsController@create')->name('create_election');
Route::post('/candidate_create/{id}', 'CandidateController@create')->name('create_candidate');
Route::get('/admission/', 'CandidateController@admission')->name('Admission');
Route::get('/admission/confirm/{id}', 'CandidateController@confirm')->name('confirm');
Route::get('/admission/refuse/{id}', 'CandidateController@refuse')->name('refuse');
Route::get('/calendar/details/{id}', 'ElectionsController@details')->name('details');
Route::post('/calendar/vote/{id}', 'VotesController@vote')->name('vote');
Route::post('/candidate/profile/{id}', 'CandidateController@edit')->name('profile_edit');
Route::post('/candidate/delete/{id}', 'CandidateController@delete_file')->name('delete_file');


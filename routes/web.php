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

Route::get('/', 'PagesControler@index');

Route::get('/admin', 'PagesControler@panel');
Route::get('/admin/newCourse', 'PagesControler@newCourse');
Route::get('/admin/{id}/edit', 'CourseController@edit');
Route::get('/courses', 'PagesControler@courses');


Route::get('/noElo', 'PagesControler@addCourse');
Route::get('/faq', 'PagesControler@faq');
Route::post('form', 'CourseController@create')->name('form.create');
Route::post('update', 'CourseController@update')->name('form.update');
Route::get('/admin/delete'  , 'CourseController@delete')->name('form.delete');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

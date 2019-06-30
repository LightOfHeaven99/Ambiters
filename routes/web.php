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
//Basicly hiperłącza

Route::get('/', 'PagesControler@index');
Route::get('/admin', 'PagesControler@panel');
Route::get('/contact', 'PagesControler@contact');
Route::get('admin.newCourse', 'PagesControler@newCourse');
Route::post('admin.{id}.edit', 'CourseController@edit')->name('form.edit');
Route::post('admin.{id}.show', 'CourseController@show')->name('form.show');
Route::get('/courses', 'PagesControler@courses');
Route::get('/faq', 'PagesControler@faq');
Route::get('panel', 'PagesControler@showUser')->name('user.panel');
Route::get('/cart', 'PagesControler@showCart');

//Działania na kurasach
Route::post('form', 'CourseController@create')->name('form.create');
Route::post('update', 'CourseController@update')->name('form.update');
Route::get('/admin/delete', 'CourseController@delete')->name('form.delete');

//działania na użytkowniku
Route::get('/deleted', 'UserController@delete')->name('user.delete');

// Działanie na zapisach
Route::post('create', 'RegistersController@create')->name('register.create');
Route::post('/admin/{id}/show',  'RegistersController@update')->name('register.accept');
Route::post('/cart', 'RegistersController@destroy')->name('register.delete');
//koszyk



Auth::routes();

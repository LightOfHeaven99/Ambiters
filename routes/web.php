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
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> e295011f011e4899c3aec71cfe44bb62cb27abab
Route::get('/admin', 'PagesControler@panel');
Route::get('/admin/newCourse', 'PagesControler@newCourse');
Route::get('/admin/{id}/edit', 'CourseController@edit');
Route::get('/courses', 'PagesControler@courses');
<<<<<<< HEAD
Route::get('/faq', 'PagesControler@faq');

=======

=======
Route::get('/noElo', 'PagesControler@addCourse');
Route::get('/faq', 'PagesControler@faq');
>>>>>>> e1fb838db16e9ee08d04638540c723ba66f870c6
>>>>>>> e295011f011e4899c3aec71cfe44bb62cb27abab
Route::post('form', 'CourseController@create')->name('form.create');
Route::post('update', 'CourseController@update')->name('form.update');
Route::get('/admin/delete'  , 'CourseController@delete')->name('form.delete');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

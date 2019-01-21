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
Route::get('/courses/create','CoursesController@create');
Route::post('/courses','CoursesController@store');
Route::get('/courses','CoursesController@index');

Route::get('/lecturer/create','LecturerController@create');
Route::post('/lecturer','LecturerController@store');
Route::get('/lecturer','LecturerController@index');

Route::get('/courseUnits/create','CourseUnitsController@create');
Route::post('/courseUnits','CourseUnitsController@store');
Route::get('/courseUnits','CourseUnitsController@index');

Route::get('/student/create','StudentController@create');
Route::post('/student','StudentController@store');



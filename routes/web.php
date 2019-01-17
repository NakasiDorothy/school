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

Route::group(['prefix'=>'Students'], function() {

// Login Routes...
    Route::get('login', ['as' => 'students.login', 'uses' => 'StudentsAuth\LoginController@showLoginForm']);
    Route::post('login', ['uses' => 'StudentsAuth\LoginController@login']);
    Route::post('logout', ['as' => 'students.logout', 'uses' => 'StudentsAuth\LoginController@logout']);

// Registration Routes...
    Route::get('register', ['as' => 'students.register', 'uses' => 'StudentsAuth\RegisterController@showRegistrationForm']);
    Route::post('register', ['uses' => 'StudentsAuth\RegisterController@register']);

// Password Reset Routes...
    Route::get('password/reset', ['as' => 'students.password.reset', 'uses' => 'StudentsAuth\ForgotPasswordController@showLinkRequestForm']);
    Route::post('password/email', ['as' => 'students.password.email', 'uses' => 'StudentsAuth\ForgotPasswordController@sendResetLinkEmail']);
    Route::get('password/reset/{token}', ['as' => 'students.password.reset.token', 'uses' => 'StudentsAuth\ResetPasswordController@showResetForm']);
    Route::post('password/reset', ['uses' => 'StudentsAuth\ResetPasswordController@reset']);
});

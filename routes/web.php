<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/', 'PagesController@index');
Route::get('/mangas', 'PagesController@mangas');
Route::get('/blogpage', 'PagesController@blogpage');
Route::get('/venue', 'PagesController@venue');
Route::get('/about', 'PagesController@about');
Route::get('/profile', 'PagesController@profile');
Route::get('/home', 'HomeController');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/login/ajax',[
  'as'   => 'login.ajax',
  'uses' => '\App\Http\Controllers\Auth\LoginController@ajaxShowForm'
]);

Route::get('/register/ajax',[
  'as'   => 'register.ajax',
  'uses' => '\App\Http\Controllers\Auth\RegisterController@ajaxShowForm'
]);

Route::get('/resetpassword',[
  'as'   => 'password.reset.ajax',
  'uses' => '\App\Http\Controllers\Auth\ForgotPasswordController@ajaxShowForm'
]);
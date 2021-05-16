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

Route::get('/', 'HomeController@welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/tests', 'TeacherController@tests')->name('tests');

Route::get('/services', 'ServiceController@services')->name('services');

Route::resource('Admin','AdminController');
Route::get('/users', 'AdminController@index')->name('users')->middleware('auth');
Route::get('/userRoles', 'AdminController@userRoles')->name('userRoles')->middleware('auth','admin');
// Route::get('/services',function(){
//     return view('services');
// }


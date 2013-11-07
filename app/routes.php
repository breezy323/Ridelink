<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

//Home
Route::get('/', array('as' => 'home', 'before' => 'auth.basic', 'uses' => 'HomeController@showIndex'));
Route::post('/', array('as' => 'home.book', 'before' => 'csrf', 'uses' => 'HomeController@bookFromIndex'));

//Booking stuff
Route::resource('booking', 'BookingController');

//Admin routes
Route::group(array('prefix' => 'admin', 'before' => 'auth.admin'), function () {
  
  //
  Route::get('/', array('as' => 'admin', 'uses' => 'AdminController@index'));

  //Users
  Route::resource('users', 'AdminUsersController');

  //Orders
  Route::resource('orders', 'AdminOrdersController');
});

//Admin Login
Route::get('/admin/login', 'AdminController@showLogin');
Route::post('/admin/login', array('as' => 'admin.login', 'before' => 'csrf', 'uses' => 'AdminController@handleLogin'));

//Admin Logout
Route::get('/admin/logout', array('as' => 'admin.logout', 'uses' => 'AdminController@handleLogout'));
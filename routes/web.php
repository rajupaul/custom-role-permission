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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['namespace'=>'Admin','prefix'=>'admin'],function(){

	Route::group(['prefix'=>'auth'],function(){
      Route::get('login','AuthController@getLogin')->name('admin.getLogin');
      Route::post('login','AuthController@postLogin')->name('admin.postLogin');
      Route::get('forgot-password','AuthController@getForgotPassword')->name('admin.getForgotPassword');
      Route::post('forgot-password','AuthController@postForgotPassword')->name('admin.postForgotPassword');
      Route::get('reset-password/{reset_code}','AuthController@getResetPassword')->name('admin.getResetPassword');
      Route::post('reset-password/{reset_code}','AuthController@postResetPassword')->name('admin.postResetPassword');
	});
  
  Route::post('logout','AuthController@logout')->name('admin.logout');
	Route::get('dashboard','DashboardController@index')->name('admin.dashboard');
  
  Route::get('roles','RoleController@index')->name('admin.roles')->middleware('need_all_roles:view-role');
  Route::get('roles/create','RoleController@create')->name('admin.roles.create');
  Route::post('roles/store','RoleController@store')->name('admin.roles.store');
  Route::get('roles/{role}/edit','RoleController@edit')->name('admin.roles.edit');
  Route::put('roles/{role}/update','RoleController@update')->name('admin.roles.update');
  Route::get('permissions','PermissionController@index')->name('admin.permissions');


});

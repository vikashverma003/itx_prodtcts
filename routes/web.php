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

/*Route::get('/', function () {
    return view('welcome');
});*/

Auth::routes();


Route::get('/user/verify/{token}', 'frontend\UserController@verifyUser');

Route::get('/','frontend\HomeController@index');
Route::get('/about_us','frontend\HomeController@about_us');


Route::middleware(['auth'])->group(function () {

 Route::get('/logout','HomeController@logout');
 Route::get('/home', 'HomeController@index')->name('home');


});
Route::get('/register_user','frontend\UserController@show_view');
Route::post('/register_user/store','frontend\UserController@store')->name('register_user.store');
Route::get('/user_details','frontend\HomeController@user_details');

Route::post('/user_details/store','frontend\HomeController@user_details_store');


// https://5balloons.info/user-email-verification-and-account-activation-in-laravel-5-5/
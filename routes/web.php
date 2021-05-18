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
    return \Illuminate\Support\Facades\Auth::check() ? redirect()->route('home') : view('welcome');
})->name('start');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/vehicles','InvitedController@vehicles')->name('vehicles');

Route::get('/about','InvitedController@about')->name('about');

Route::get('/faq','InvitedController@faq')->name('faq');

Route::get('/terms','InvitedController@terms')->name('terms');

Route::get('/contact','InvitedController@contact')->name('contact');

Route::resource('cars','CarController')->except('show')->middleware('auth');

Route::get('cars/{car}','CarController@show')->name('cars.show');

Route::delete('photo/{photo}','CarController@deletePhotoCar')->name('delete.photo');

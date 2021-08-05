<?php

use Illuminate\Routing\RouteGroup;
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

//Frontend mastering Route
Route::get('/', 'Frontend\HomeController@index');
Route::get('/about', 'Frontend\AboutController@index')->name('about.us');
Route::get('/properties', 'Frontend\PropertiesController@index')->name('properties');
Route::get('/blog', 'Frontend\BlogController@index')->name('blog');
Route::get('/contact', 'Frontend\ContactController@index')->name('contact');

//Backend mastering route
Route::prefix('admin', 'as=>admin.')->group(function () {
    
    Route::get('login', 'backend\LoginController@index')->name('login');
    Route::get('dashboard', 'backend\DashboardController@index')->name('dashboard');
    Route::get('/about', 'backend\AboutController@index')->name('about.us');
    Route::get('/properties', 'backend\PropertiesController@index')->name('properties');
    Route::get('/blog', 'backend\BlogController@index')->name('blog');
    Route::get('/contact', 'backend\ContactController@index')->name('contact');
});
<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/ 

Route::group(['namespace' => 'App\Http\Controllers'], function()
{  
    Route::get('/', 'HomeController@index')->name('home.index');
    Route::get('/about', 'HomeController@about')->name('home.about');
    Route::get('/services', 'HomeController@services')->name('home.services');
    Route::get('/projects', 'HomeController@projects')->name('home.projects');
    Route::match(['get','post'],'/contact', 'HomeController@contact')->name('home.contact');
    Route::match(['get','post'],'/quote', 'HomeController@quote')->name('home.quote');



    Route::get('/subsidiaries', 'HomeController@subsidiaries')->name('home.subsidiaries');

});

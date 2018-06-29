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

Route::get('/', 'MainController@index');
Route::group(['middleware' => ['auth','admin'],'prefix' => 'admin', 'namespace' => 'Admin'], function () {

        Route::resource('/companies', 'CompaniesController');

        Route::resource('/companies.events', 'EventsController');

        Route::resource('/events.reports', 'ReportsController');

        Route::resource('/reports.comments', 'CommentsController');

});

Route::group(['middleware' => ['auth','manager'],'prefix' => 'manager', 'namespace' => 'Manager'], function () {
    Route::resource('/companies', 'CompaniesController');
    Route::resource('/companies.events', 'EventsController');
});

Route::group(['middleware' => ['auth','user'],'prefix' => 'user', 'namespace' => 'User'], function () {
//    Route::resource('/companies', 'CompaniesController');
});


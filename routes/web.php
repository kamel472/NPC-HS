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



Route::resource('observations', 'ObservationController');
Route::patch('observations/{id}/correctiveAction', 'ObservationController@correctiveAction')->name('observations.correctiveAction');
Route::get('observation/stats', 'ObservationController@stats')->name('observations.stats');



Route::resource('permits', 'PermitController');

Route::resource('courses', 'CourseController');
Route::resource('stats', 'StatsController');
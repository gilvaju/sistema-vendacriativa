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

// Route::get('/t', function () {
    // return view('test');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/task/opened/{task}', 'TaskController@opened')->name('task.opened');
Route::post('/task/completed/{task}', 'TaskController@completed')->name('task.completed');
Route::post('/task/aprove/{task}', 'TaskController@aprove')->name('task.aprove');
Route::post('/task/production/{task}', 'TaskController@production')->name('task.production');
Route::post('/task/pendent/{task}', 'TaskController@pendent')->name('task.pendent');
Route::post('/task/change/{task}', 'TaskController@change')->name('task.change');

// Route::resource('client', 'ClientController');
Route::resource('task', 'TaskController');

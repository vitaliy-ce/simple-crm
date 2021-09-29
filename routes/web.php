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

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/sites', 'App\Http\Controllers\SiteController@index')->name('sites');
// Route::get('/sites/{id}', 'App\Http\Controllers\SiteController@show')->name('sites.show');
Route::get('sites/datatables', 'App\Http\Controllers\SiteController@datatables_data')->name('sites.datatables_data');
Route::resource('sites', App\Http\Controllers\SiteController::class);

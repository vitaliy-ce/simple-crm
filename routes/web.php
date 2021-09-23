<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

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
    return view('index/home');
})->name('home');

// Route::get('/sites', 'App\Http\Controllers\SiteController@index')->name('sites');
// Route::get('/sites/{id}', 'App\Http\Controllers\SiteController@show')->name('sites.show');
Route::resource('sites', SiteController::class);

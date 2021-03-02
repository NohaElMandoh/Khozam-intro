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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return redirect('/Home');
});

Route::get('/Home','App\Http\Controllers\HomeController@index')->name('pages.home');
Route::post('/send_data','App\Http\Controllers\HomeController@store');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

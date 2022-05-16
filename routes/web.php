<?php

use Illuminate\Support\Facades\Auth;
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
Route::get('/', 'App\Http\Controllers\SitesController@index');
Route::get('/add', 'App\Http\Controllers\SitesController@add');
Route::get('/user', 'App\Http\Controllers\SitesController@user');
Route::post('/', [
    'uses' => 'App\Http\Controllers\SitesController@save',
    'as' => 'sites/save'
]);
Route::get('/site/{site}', [
    'uses' => 'App\Http\Controllers\SitesController@show',
    'as' => 'sites/show'
]);
Auth::routes();

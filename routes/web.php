<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/recetas', 'App\Http\Controllers\RecetaController@index')->name('recetas.index');
Route::get('/recetas/create', 'App\Http\Controllers\RecetaController@create')->name('recetas.create');
Route::post('/recetas', 'App\Http\Controllers\RecetaController@store')->name('recetas.store');
Route::get('/recetas/{receta}', 'App\Http\Controllers\RecetaController@show')->name('recetas.show');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

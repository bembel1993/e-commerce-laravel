<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
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

//Route::get('/', function () {return view('products.index');});
Route::get('products.edit/{id}', [ProductController::class, 'edit']);
Route::put('editindb/{id}', [ProductController::class, 'update']);
Route::get('products.delete/{id}', [ProductController::class, 'destroy']);

Route::group(['namespace' => 'App\Http\Controllers'], function () {
    Route::get('/', 'ProductController@index')->name('products.index');
    Route::get('/createform', 'ProductController@create')->name('products.create');
    Route::post('/createprod', 'ProductController@store')->name('addindb');
});

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

Route::get('/createaccount', function (){
    return view('GardenWeb.createaccount');
});

Route::get('/pro', function (){
    return view('GardenWeb.products');
});
Route::get('/inspiration', function (){
    return view('GardenWeb.inspiration');
});
Route::get('/create', function (){
    return view('Admin.Create');

});
Route::get('/create', function (){
    return redirect(route('products.create'));

});
Route::get('/show', function (){

    return view('Admin.Show');
});

Route::resource('garden', \App\Http\Controllers\GardenController::class);
Route::resource('products', \App\Http\Controllers\ProductsController::class);
Route::resource('category', \App\Http\Controllers\CategoriesController::class);
//Route::resource('garden', \App\Http\Controllers\GardenController::class);
//Route::resource('garden', \App\Http\Controllers\GardenController::class);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');





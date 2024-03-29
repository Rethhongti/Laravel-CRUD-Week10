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
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/category',App\Http\Controllers\CategoryController::class);

Route::get('/category-edit/{id}/{cat_name}', function ($id,$cat_name) {
    return view('category.edit',['id'=>$id,'cat_name'=>$cat_name]);
})->middleware(['can:crud-category']);

Route::post('/update', [App\Http\Controllers\CategoryController::class,'updateCustom']);
Route::resource('/post',App\Http\Controllers\ProductController::class);

Route::post('/updateProduct',[App\Http\Controllers\ProductController::class,'productUpdate']);
Route::get('/product-edit/{id}',[App\Http\Controllers\ProductController::class,'show']);

Auth::routes();



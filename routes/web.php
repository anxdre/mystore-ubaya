<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
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

Route::get('/home/{id}', [ProductController::class,'getByCategory'])->middleware('auth');
Route::get('/',function (){
    return redirect('/home/1');
});

//
//Route::get('/kategori', function () {
//    return view('kategori', ['name'=>'Samantha']);
//});
//
//Route::get('/kategori/remaja', function () {
//    return view('remaja');
//});
//
//Route::view('/profile', 'Hello, your name!');
//
//Route::get('/report/showclothes/{id}',[CategoryController::class,'showProducts'])
//        ->name('reportShowProduct');
//
//
//Route::post('/produk/showInfo',[ProductController::class,'showInfo'])->name('products.showInfo');
//
Route::resource('product', ProductController::class)->middleware('auth');
//Route::resource('category', CategoryController::class);
//Route::resource('supplier', SupplierController::class);
//
Route::get('getRole/{role_id}', [RoleController::class,'getRole']);

Auth::routes();

Route::get('/auth', [App\Http\Controllers\HomeController::class, 'index'])->name('welcome');

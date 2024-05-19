<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('user.home');
});

Route::get('/',[HomeController::class,'GetProductsInHome']);
Route::get('/redirect',[HomeController::class,'redirect']);
Route::get('/view_category',[AdminController::class,'view_category']);
Route::post('/add_category',[AdminController::class,'add_category']);
Route::get('/delete_category/{id}',[AdminController::class,'delete_category']);
Route::get('/view_product',[AdminController::class,'view_product']);
Route::post('/add_product',[AdminController::class,'add_product']);
Route::get('/show_product',[AdminController::class,'show_product']);
Route::get('/delete_product/{id}',[AdminController::class,'delete_product']);
// e perdorum me cick by id per item kur dojm me pa details e ni produkti
Route::get('/update_product/{id}',[AdminController::class,'update_product']);
Route::post('/update_product_confirm/{id}',[AdminController::class,'update_product_confirm']);

Route::get('/productDetails/{id}',[UserController::class,'productDetails']);




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

<?php 

use App\Http\Controllers\Product\ProductController;
use Illuminate\Support\Facades\Route;

Route::group([], function () {
    Route::get('/product', [ProductController::class,'product'])->name('product');
    Route::get('products',[ProductController::class,'create'])->name('products');
    Route::post('product-add', [ProductController::class,'store'])->name('productSave');
    Route::get('/editproduct/{id}', [ProductController::class,'productEdit'])->name('productEdit');
    Route::post('/productUpdate', [ProductController::class,'productUpdate'])->name('productUpdate');
    Route::get('/productDelete/{id}', [ProductController::class,'productDelete'])->name('productDelete');
});
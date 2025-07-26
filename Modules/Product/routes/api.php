<?php

use Illuminate\Support\Facades\Route;
use Modules\Product\Http\Controllers\Product\StoreProductController;
use Modules\Product\Http\Controllers\ProductController;

Route::prefix('/')
    ->name('')
    ->group(function () {
       Route::post('/', StoreProductController::class)->name('store')->middleware('permission:product-create');
    });

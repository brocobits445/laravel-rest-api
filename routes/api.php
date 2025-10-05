<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Test route
Route::get('/test', function (Request $request) {
    return response()->json(['message' => 'API is working']);
}); 

// get all products 

Route::get('/products', [App\Http\Controllers\ProductController::class, 'index']);
// get a single product by id
Route::get('/products/{id}', [App\Http\Controllers\ProductController::class, 'show']);
// create a new product             
Route::post('/products', [App\Http\Controllers\ProductController::class, 'store']);
// update a product by id
Route::put('/products/{id}', [App\Http\Controllers\ProductController::class, 'update']);
// delete a product by id
Route::delete('/products/{id}', [App\Http\Controllers\ProductController::class, 'destroy']);


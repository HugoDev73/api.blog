<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\RegisterController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\PostController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::post('register', [RegisterController::class, 'store'])->name('api.v1.register');

/* Route::get('categories', [CategoryController::class, 'index'])->name('api.v1.categories.index');
Route::post('categories', [CategoryController::class, 'store'])->name('api.v1.categories.store');
Route::get('categories/{category}', [CategoryController::class, 'show'])->name('api.v1.categories.show');
Route::put('categories/{category}', [CategoryController::class, 'update'])->name('api.v1.categories.update');
Route::delete('categories/{category}', [CategoryController::class, 'delete'])->name('api.v1.categories.delete'); */

//Para reducir el codigo podemos crear un grupo de rutas con apiResource
Route::apiResource('categories', CategoryController::class)->names('api.v1.categories');
Route::apiResource('posts', PostController::class)->names('api.v1.posts');

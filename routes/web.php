<?php

use App\Http\Controllers\CategoryController;
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


Route::prefix('admin')->group(function () {
    Route::prefix('category')->group(function () {
        Route::get('', [CategoryController::class, 'index'])
        ->name('admin.category.index');

        Route::get('create', [CategoryController::class, 'create'])
        ->name('admin.category.create');

        Route::post('store', [CategoryController::class, 'store'])
        ->name('admin.category.store');

        Route::get('edit/{id}', [CategoryController::class, 'create'])
        ->name('admin.category.create');

        Route::put('update/{id}', [CategoryController::class, 'update'])
        ->name('admin.category.update');

        Route::get('delete/{id}', [CategoryController::class, 'delete'])
        ->name('admin.category.delete');
    });
});
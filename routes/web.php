<?php

use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\PostController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\ContactController;
use App\Http\Controllers\Api\CommentController;
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

        Route::get('edit/{id}', [CategoryController::class, 'edit'])
        ->name('admin.category.edit');

        Route::put('update/{id}', [CategoryController::class, 'update'])
        ->name('admin.category.update');

        Route::get('delete/{id}', [CategoryController::class, 'delete'])
        ->name('admin.category.delete');
    });

    Route::prefix('post')->group(function () {
        Route::get('', [PostController::class, 'index'])
        ->name('admin.post.index');

        Route::get('create', [PostController::class, 'create'])
        ->name('admin.post.create');

        Route::post('store', [PostController::class, 'store'])
        ->name('admin.post.store');

        Route::get('edit/{id}', [PostController::class, 'edit'])
        ->name('admin.post.edit');

        Route::put('update/{id}', [PostController::class, 'update'])
        ->name('admin.post.update');

        Route::get('delete/{id}', [PostController::class, 'delete'])
        ->name('admin.post.delete');
    });

    Route::prefix('contact')->group(function () {
        Route::get('', [ContactController::class, 'index'])
        ->name('admin.contact.index');

        Route::get('create', [ContactController::class, 'create'])
        ->name('admin.contact.create');

        Route::post('store', [ContactController::class, 'store'])
        ->name('admin.contact.store');

        Route::get('edit/{id}', [ContactController::class, 'edit'])
        ->name('admin.contact.edit');

        Route::put('update/{id}', [ContactController::class, 'update'])
        ->name('admin.contact.update');

        Route::get('delete/{id}', [ContactController::class, 'delete'])
        ->name('admin.category.delete');
    });

    Route::prefix('user')->group(function () {
        Route::get('', [UserController::class, 'index'])
        ->name('admin.user.index');

        Route::get('create', [UserController::class, 'create'])
        ->name('admin.user.create');

        Route::post('store', [UserController::class, 'store'])
        ->name('admin.user.store');

        Route::get('edit/{id}', [UserController::class, 'edit'])
        ->name('admin.user.edit');

        Route::put('update/{id}', [UserController::class, 'update'])
        ->name('admin.user.update');

        Route::get('delete/{id}', [UserController::class, 'delete'])
        ->name('admin.user.delete');
    });

    Route::prefix('comment')->group(function () {
        Route::get('', [CommentController::class, 'index'])
        ->name('admin.comment.index');

        Route::get('create', [CommentController::class, 'create'])
        ->name('admin.comment.create');

        Route::post('store', [CommentController::class, 'store'])
        ->name('admin.comment.store');

        Route::get('edit/{id}', [CommentController::class, 'edit'])
        ->name('admin.comment.edit');

        Route::put('update/{id}', [CommentController::class, 'update'])
        ->name('admin.comment.update');

        Route::get('delete/{id}', [CommentController::class, 'delete'])
        ->name('admin.comment.delete');
    });


});
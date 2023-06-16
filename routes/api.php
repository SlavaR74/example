<?php

use App\Http\Controllers\CommentControllerr;

use App\Http\Controllers\BlogController;

use Illuminate\Support\Facades\Route;


Route::get('blog', [BlogController::class, 'index'])->name('blog');

Route::get('blog/{post}', [BlogController::class, 'show'])->name('blog.show');

Route::post('blog/{post}/like', [BlogController::class, 'like'])->name('blog.like');



Route::resource('posts/{post}/comments', CommentController::class)->only([

    'index', 'show',

]);

// Route::fallback(function () {
//     return 'Fallback';
// });
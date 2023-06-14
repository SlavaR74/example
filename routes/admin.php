<?php

use App\Http\Controllers\AdminPostController;

use Illuminate\Support\Facades\Route;


Route::prefix('admin')->middleware('auth', 'active', 'admin')->group(function () {

    Route::redirect('/','/admin/post')->name('admin');


    Route::get('posts', [AdminPostController::class, 'index'])->name('admin.posts');

    Route::get('posts/create', [AdminPostController::class, 'create'])->name('admin.posts.create');

    Route::post('posts', [AdminPostController::class, 'store'])->name('admin.posts.store');

    Route::get('posts/{post}', [AdminPostController::class, 'show'])->name('admin.posts.show');

    Route::get('posts/{post}/edit', [AdminPostController::class, 'edit'])->name('admin.posts.edit');

    Route::put('posts/{post}', [AdminPostController::class, 'update'])->name('admin.posts.update');

    Route::delete('posts/{post}', [AdminPostController::class, 'delete'])->name('admin.posts.delete');

    Route::put('posts/{post}/like', [AdminPostController::class, 'like'])->name('admin.posts.like');
});

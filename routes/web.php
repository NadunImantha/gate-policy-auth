<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/gate', [App\Http\Controllers\AuthorizationController::class, 'index'])->name('gate.index');
Route::get('/post', [App\Http\Controllers\PostController::class, 'index'])->name('post.index');
Route::get('/post/{post}', [App\Http\Controllers\PostController::class, 'show'])->name('post.show');
Route::get('/post/delete/{post}', [App\Http\Controllers\PostController::class, 'destroy'])->name('post.destroy');
Route::get('/post/edit/{post}', [App\Http\Controllers\PostController::class, 'edit'])->name('post.edit');
Route::put('/post/update/{post}', [App\Http\Controllers\PostController::class, 'update'])->name('post.update');
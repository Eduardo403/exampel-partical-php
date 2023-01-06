<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;




Route::get('/', function () {
    return view('welcome');
});
Route::view("/contact","contact")->name('contact');
Route::get("/blog",[PostController::class,'index'])->name('posts.index');
Route::get('blog/create',[PostController::class,'create'])->name('posts.create');
Route::post('/blog',[PostController::class,'store'])->name('posts.store');
Route::patch('/blog/{post}',[PostController::class,'update'])->name('posts.update');
Route::get("/blog/{id}/edit",[PostController::class,'edit'])->name('posts.edit');
Route::get("/blog/{id}",[PostController::class,'show'])->name('posts.show');
Route::view("/abaut","abaut")->name('abaut');


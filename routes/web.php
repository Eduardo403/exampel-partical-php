<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;




Route::get('/', function () {
    return view('welcome');
});
Route::view("/contact","contact")->name('contact');
Route::get("/blog",[PostController::class,'index'])->name('blog');
Route::view("/abaut","abaut")->name('abaut');

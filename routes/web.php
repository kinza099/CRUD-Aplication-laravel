<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;

Route::get('/',[PostController::class,'displayuser']);

Route::get('/index',[PostController::class,'displayindex'])->name('index');

Route::get('/about',[PostController::class,'displayabout'])->name('about');

Route::get('/contact',[PostController::class,'displaycontact'])->name('contact');

Route::get('/edit{post}',[PostController::class,'edit'])->name('edit');

Route::post('/store',[PostController::class,'store']);

Route::delete('/del{post}',[PostController::class,'delete'])->name('del');

Route::put('/update{post}', [PostController::class, 'update'])->name('update');






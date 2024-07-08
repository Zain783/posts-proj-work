<?php

use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;


Route::get('/',[PostsController::class,'postview']);

Route::post('/AddPosts',[PostsController::class,'addPosts'])->name('add.post');

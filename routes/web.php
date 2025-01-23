<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'home']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/contact', [HomeController::class, 'contact']);

Route::get('/posts', [PostController::class, 'show']);
Route::get('/posts/{post:slug}', [PostController::class, 'showSinglePost']);

Route::get('/authors/{user:username}', [AuthorController::class, 'show']);

Route::get('/categories/{category:slug}', [CategoryController::class, 'show']);
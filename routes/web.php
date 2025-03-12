<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;

Route::get('/', [PostController::class, 'index']);
Route::get('/posts/{post}', [PostController::class, 'show']);
Route::post('/posts/{post}/comments', [CommentController::class, 'store']);
Route::get('/about', [BlogController::class, 'about']);


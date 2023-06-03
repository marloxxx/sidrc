<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Frontend\PostController;
use App\Http\Controllers\Frontend\EventController;
use App\Http\Controllers\Frontend\FrontController;

Route::get('/', [FrontController::class, 'index'])->name('home');
Route::get('about', [FrontController::class, 'about'])->name('about');
Route::get('member', [FrontController::class, 'member'])->name('member');
Route::get('sponsor', [FrontController::class, 'sponsor'])->name('sponsor');
Route::get('posts', [PostController::class, 'index'])->name('posts');
Route::get('posts/{slug}', [PostController::class, 'show'])->name('posts.show');
Route::get('events', [EventController::class, 'index'])->name('events');
Route::get('events/{slug}', [EventController::class, 'show'])->name('events.show');

Route::get('login', [AuthController::class, 'login'])->name('index');
Route::post('login', [AuthController::class, 'do_login'])->name('login');
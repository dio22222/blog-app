<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();

Route::get('/',[\App\Http\Controllers\PostController::class,'index'])->name('index');

Route::get('posts/{slug}',[\App\Http\Controllers\PostController::class,'view'])->name('post.view');

Route::get('{user_id}/posts', [\App\Http\Controllers\UserPostController::class,'index'])->name('user.posts');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\HomeController;
use \App\Http\Controllers\PostController;

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

Route::get('/', [HomeController::class, 'index'])
    ->name(name:'home');
Route::view(uri:'/about', view:'about')->name(name:'about');
Route::view(uri:'/contact', view:'contact')->name(name:'contact');

Route::get('posts/{post}', 
    [PostController::class, 'show'])->name(name: 'posts.show');
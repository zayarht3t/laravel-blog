<?php

use App\Http\Controllers\AdminBlogController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Route;
use App\Models\Blog;
use App\Models\Category;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [BlogController::class,'index']);

Route::get('/blogs/{blog:slug}', [BlogController::class,'show'] );
Route::post('/blogs/{blog:slug}/comments', [CommentController::class,'store'] );
Route::post('/blogs/{blog:slug}/subscription', [BlogController::class,'subscriptionHandler'] );

Route::get('/register',[AuthController::class,'create'])->middleware('guest');
Route::post('/register',[AuthController::class,'store'])->middleware('guest');
Route::post('/logout',[AuthController::class,'logout'])->middleware('auth');

Route::get('/login',[AuthController::class,'login'])->middleware('guest');
Route::post('/login',[AuthController::class,'post_login'])->middleware('guest');

Route::post('/admin/blogs/create',[AdminBlogController::class,'create']);
Route::delete('/admin/blogs/{blog:slug}/delete',[AdminBlogController::class,'delete']);

Route::get('/admin/blogs/create',[AdminBlogController::class,'store'])->middleware('admin');
Route::get('/admin/blogs/{blog:slug}/edit',[AdminBlogController::class,'edit'])->middleware('admin');
Route::patch('/admin/blogs/{blog:slug}/edit',[AdminBlogController::class,'update'])->middleware('admin');
Route::get('/admin/blogs',[AdminBlogController::class,'index'])->middleware('admin');



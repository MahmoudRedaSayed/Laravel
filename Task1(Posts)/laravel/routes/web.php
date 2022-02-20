<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;

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
// the main page to show all posts
Route::get('/Posts', [PostsController::class,'index'])->name("posts");

// the page to show the single post
Route::get('/Posts/{Post}', [PostsController::class,'show'])->name("posts.show");

// the page to updata the post
Route::put('/Posts/{Post}/update', [PostsController::class,'update'])->name("posts.update");

// the page to create the post
Route::get('/Posts/Create', [PostsController::class,'create'])->name("posts.create");

// the page to edit the post
Route::get('/Posts/{Post}/edit', [PostsController::class,'edit'])->name("posts.edit");

// the page to delete the post
Route::get('/Posts/{Post}/delete', [PostsController::class,'delete'])->name("posts.delete");
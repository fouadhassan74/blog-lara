<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/',[PagesController::class,'indexAction'])->name('home');
Route::get("/blog", [PostsController::class, "indexAction"])->name('blog.index');
Route::get("/blog/create", [PostsController::class, "createAction"])->name('blog.create');
Route::get('/blog/{post}', [PostsController::class, 'showAction'])->name('blog.show');
Route::post("/blog", [PostsController::class, 'storeAction'])->name('blog.store');
Route::get('/blog/{post}/edit', [PostsController::class,'editAction'])->name('blog.edit');
Route::put('/blog/{post}/edit', [PostsController::class,'updateAction'])->name('blog.update');
Route::delete('/blog/{post}', [PostsController::class,'destroyAction'])->name('blog.destroy');
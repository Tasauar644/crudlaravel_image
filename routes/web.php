<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/getuserdata',[UserController::class,'index']);
Route::get('/getuserpost',[PostController::class,'index']);
Route::get('/create',[UserController::class,'insert'] );
Route::post('/create',[UserController::class,'store'] );
Route::get('/user/delete/{id}',[UserController::class,'delete'])->name('user.delete');
Route::get('/user/edit/{id}',[UserController::class,'edit'])->name('user.edit');
Route::post('/user/update/{id}',[UserController::class,'update'])->name('user.update');
Route::get('/post/create',[PostController::class,'insert'])->name('post.create');
Route::post('/post/create',[PostController::class,'store']);
Route::get('/post/delete/{id}',[PostController::class,'delete'])->name('post.delete');
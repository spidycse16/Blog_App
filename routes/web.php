<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use app\Http\Middleware\admin;
// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[HomeController::class,'homePage'])->name('home');
Route::get('/post',[HomeController::class,'post'])->middleware(['auth','admin']);
Route::get('/dashboard',[HomeController::class,'index'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/show_blog/{id}/',[HomeController::class,'show_blog']);
Route::get('/user_create_post',[HomeController::class,'user_create_post']);
Route::post('/add_user_post',[HomeController::class,'add_user_post']);
Route::get('/allpost',[HomeController::class,'allpost']);

Route::get('/post_page',[adminController::class,'postData'])->name('');
Route::post('/add_post',[adminController::class,'addData'])->name('');
Route::get('/show_post',[adminController::class,'showPost']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

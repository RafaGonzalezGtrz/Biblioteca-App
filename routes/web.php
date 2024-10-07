<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LinksController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BooksController;


//Rutas de usuario
Route::get('/', HomeController::class);
Route::get('/home', [LinksController::class, 'home'])->middleware('auth')-> name('home');
Route::get('/profile', [LinksController::class,'profile'])->middleware('auth')-> name('profile');
Route::get('/mybooks', [LinksController::class,'downloads'])->middleware('auth')-> name('mybooks');
Route::get('/support', [LinksController::class, 'support'])->middleware('auth')->name('support');
Route::resource('/search', BooksController::class)->middleware('auth');

//Inicio, registro y validaciones
Route::get('/login', [LinksController::class,'login'])-> name('login');
Route::get('/register', [LinksController::class,'register'])-> name('register');
Route::post('/validad-registro', [LoginController::class,'register'])-> name('validad-registro');
Route::post('/inicia-sesion', [LoginController::class, 'login'])-> name('inicia-sesion');
Route::get('/logout', [LoginController::class, 'logout'])-> name('logout');


//Rutas de admin
Route::get('/admin', [AdminController::class, 'index'])-> middleware(['auth.admin'])->name('adminscreen');
Route::resource('/users', UserController::class)-> middleware(['auth.admin']);
Route::get('/upload', [BooksController::class, 'create'])-> middleware(['auth.admin'])->name('upload');
Route::resource('/store', BooksController::class)-> middleware(['auth.admin']);
Route::resource('/edit', BooksController::class)-> middleware(['auth.admin']);

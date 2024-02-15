<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('home');
Route::get('/', [App\Http\Controllers\Controller::class, 'index'])->name('index');
Route::get('/add', [App\Http\Controllers\AddController::class, 'add'])->name('add');
Route::post('/form', [App\Http\Controllers\AddController::class, 'submitForm'])->name('form');


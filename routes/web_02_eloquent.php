<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ProyectoController;
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
    return view('home');
});


    

Route::get('/home', function () {
    return view('home');
})->name('home');
Route::get('/about', function () {
    return view('about');
})->name('about');


Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [MessageController::class, 'store'])->name('message.store');
Route::get('/user', [UserController::class, 'index'])->name('usuario');


Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio'); 
Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio'); 

Route::get('/proyecto', [ProyectoController::class, 'index'])->name('proyecto'); 

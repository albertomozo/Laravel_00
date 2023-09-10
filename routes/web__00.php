<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;
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
Route::get('/Hola', function () {
    return 'Hola';
});
Route::get('/saludo/{nombre}',function($nombre){
    return "Hola $nombre";
});
// proyecto-02.test/saludo/Aitor
// proyecto-02.test/saludo
Route::get('/saludoI/{nombre?}',function($nombre = "Invitado"){
    return "Hola $nombre";
});
/* RUTAS CON NOMBRE */
 Route::get('contactos2', function(){
    return "seccion de contactos";
})->name('contactos');
// route (name)
Route::get('listacontactos', function(){
   echo  "<a href='".route('contactos')."'>contacto</a><br>";
   echo  "<a href='".route('contactos')."'>contacto</a><br>";
   echo  "<a href='".route('contactos')."'>contacto</a><br>";
});
    
/* Si cambio en nombre de routa contacto, tengo que cambiar todo */
Route::get('/home', function () {
    return view('home');
})->name('casa');
Route::get('/about', function () {
    return view('about');
});

Route::get('/portfolio',function () {
    return view('portfolio');
});

Route::get('/contact', [ContactController::class, 'index']);
Route::get('/user', [UserController::class, 'index'])->name('usuario');




<?php

use App\Http\Controllers\PHPMailerController;
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


Route::get('/inicio', [App\Http\Controllers\homeCartasController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/noticias', [App\Http\Controllers\HomeController::class, 'noticias'])->name('noticias');
Route::get('/eventos', [App\Http\Controllers\HomeController::class, 'eventos'])->name('eventos');
Route::get('/contacto', function () {
    return view('contacto');
});
Route::get('/colegio', function () {
    return view('colegio');
});
Route::get('afiliacion', [PHPMailerController::class, "afiliacion"])->name("afiliacion"); 
Route::post("send-email", [PHPMailerController::class, "composeEmail"])->name("send-email");

Auth::routes();
Route::resource('/noticiashome', App\Http\Controllers\NoticiashomeController::class);




 

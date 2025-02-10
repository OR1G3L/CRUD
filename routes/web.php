<?php

use App\Http\Controllers\ServicioController;
use App\Mail\contactoMailable;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;


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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/correos', function () {
    return view('correos.registroExitoso');
});
Route::get('registroExitoso', function (){
    Mail::to('streamservices@mail.com')
    ->send(new contactoMailable);
})->name('registroExitoso');
Route::resource('servicios','App\Http\Controllers\ServicioController');
Route::resource('users','App\Http\Controllers\UserController');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

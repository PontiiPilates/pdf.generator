<?php

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

// возвращает главную страницу
Route::get('/', [\App\Http\Controllers\GeneralController::class, 'index'])->name('getGeneral');

// отправляет форму на главную страницу
Route::post('/', [\App\Http\Controllers\GeneralController::class, 'send'])->name('sendGeneral');

Route::get('/p', [\App\Http\Controllers\GeneralController::class, 'pdfGenerate'])->name('pdfgenerate');
Route::get('/m', [\App\Http\Controllers\GeneralController::class, 'mailSend'])->name('mailsend');

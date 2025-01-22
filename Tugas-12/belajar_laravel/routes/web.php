<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})
->name('home');

Route::get('/form', [AuthController::class, 'showForm'])->name('form');

Route::post('/welcome', [AuthController::class, 'welcome'])->name('welcome');


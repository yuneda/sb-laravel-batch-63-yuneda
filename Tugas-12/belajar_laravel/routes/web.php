<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CastController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'home']);
Route::get('/register', [AuthController::class, 'register']);
Route::post('/welcome', [AuthController::class, 'welcome']);

Route::get('/data-table', function(){
    return view('page.data-table');
});

Route::get('/table', function(){
    return view('page.table');
});

// CRUD
Route::get('/cast/create', [CastController::class, 'create'])->name('cast.create');
Route::post('/cast', [CastController::class, 'store']);

Route::get('/cast', [CastController::class, 'index']);
Route::get('/cast/{cast_id}', [CastController::class, 'show']);

Route::get('/cast/{cast_id}/edit', [CastController::class, 'edit']);
Route::put('/cast/{cast_id}', [CastController::class, 'update']);

Route::delete('/cast/{cast_id}', [CastController::class, 'destroy']);


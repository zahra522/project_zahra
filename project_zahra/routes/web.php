<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SantriController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/indexsantri', [SantriController::class, 'index'])->name('indexsantri');
Route::get('/createsantri', [SantriController::class, 'create']);
Route::post('/storesantri', [SantriController::class, 'store']);
Route::get('/showsantri/{id}', [SantriController::class, 'showsantri']);
Route::get('/editsantri/{id}', [SantriController::class, 'edit']);
Route::put('/updatesantri/{id}', [SantriController::class, 'update']);
Route::post('/deletesantri/{id}', [SantriController::class, 'delete']);

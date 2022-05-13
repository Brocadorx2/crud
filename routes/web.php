<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\JogoController;

Route::get('/', [JogoController::class, 'index']);
Route::get('/events/create', [JogoController::class, 'create']);
Route::post('/events', [JogoController::class, 'store']);
Route::delete('/events/{id}', [JogoController::class, 'destroy']);
Route::get('/events/edit/{id}', [JogoController::class, 'edit']);
Route::put('/events/update/{id}', [JogoController::class, 'update']);

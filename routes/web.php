<?php

use App\Http\Controllers\Persons\AddController;
use App\Http\Controllers\Persons\DeleteController;
use App\Http\Controllers\Persons\GetController;
use App\Http\Controllers\Persons\ListController;
use App\Http\Controllers\Persons\UpdateController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/api/persons', ListController::class);
Route::post('/api/persons', AddController::class);

Route::get('/api/persons/{id}', GetController::class);
Route::patch('/api/persons/{id}', UpdateController::class);
Route::delete('/api/persons/{id}', DeleteController::class);

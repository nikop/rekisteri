<?php

use App\Http\Controllers\Persons\AddController;
use App\Http\Controllers\Persons\GetController;
use App\Http\Controllers\Persons\ListController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/api/persons', ListController::class);
Route::get('/api/persons/{id}', GetController::class);
Route::post('/api/persons', AddController::class);

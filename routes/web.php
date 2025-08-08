<?php

use App\Http\Controllers\Persons\ListController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/api/persons', ListController::class);
Route::post('/api/persons', ListController::class);

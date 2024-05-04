<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GreetController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello/{name}', [GreetController::class, 'greet']);
Route::view('/hello', 'greet');
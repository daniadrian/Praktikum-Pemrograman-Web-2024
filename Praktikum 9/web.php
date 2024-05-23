<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/praktikum-laravel', function () {
    return view('praktikum2.index');
});

Route::get('events/{location}/{name}', [App\Http\Controllers\EventsController::class, 'show']);

Route::get('events', [App\Http\Controllers\EventsController::class, 'index']);

Route::get('events/validate', [App\Http\Controllers\EventsController::class, 'showValidateForm'])
    ->name('validateform.event');

Route::post('events/validate', [App\Http\Controllers\EventsController::class, 'validateForm'])
    ->name('validate.event');

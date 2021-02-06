<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\NoteController;

Route::view('/', 'index');

Route::get('dashboard', [PageController::class,'dashboard'])
    ->middleware('auth:sanctum')
    ->name('dashboard');

Route::resource('notes', NoteController::class)
    ->middleware('auth:sanctum');

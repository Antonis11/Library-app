<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibraryController;

Route::view('/', 'home');

Route::get('/library', [LibraryController::class, 'index']);
    ->name('library.index');
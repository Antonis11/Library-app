<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibraryController;

Route::view('/', 'home');

Route::get('/library', [LibraryController::class, 'index'])
    ->name('library.index');

Route::get('/library/create', [LibraryController::class, 'create'])
    ->name('library.create');

Route::post('/library/store', [LibraryController::class, 'store'])
    ->name('library.store');

Route::get('/library/{id}', [LibraryController::class, 'show'])
    ->name('library.show');
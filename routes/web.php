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

Route::get('/library/{library}', [LibraryController::class, 'show'])
    ->name('library.show');

Route::get('/library/{library}/edit', [LibraryController::class, 'edit'])
    ->name('library.edit');

Route::patch('/library/{library}', [LibraryController::class, 'update'])
    ->name('library.update');

Route::delete('/library/{library}', [LibraryController::class, 'destroy'])
    ->name('library.destroy');
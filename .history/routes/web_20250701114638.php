<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibraryController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function() {
    
});

Route::get('/products', [LibraryController::class, 'index']);

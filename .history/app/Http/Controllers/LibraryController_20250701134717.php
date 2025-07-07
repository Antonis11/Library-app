<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class LibraryController extends Controller
{
    public function index() {
        $libraries = Library::all();

        return view('library.index');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class LibraryController extends Controller
{
    public function index() {
        $libraries = Library::all();

        // var_dump($libraries);
        // die; 
        dd($products);

        return view('library.index');
    }
}

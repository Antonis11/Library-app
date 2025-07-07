<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class LibraryController extends Controller
{
    public function index() {
        $library = Library::all();

        var_dump($library);
        die; 

        dd($libraries);

        return view('library.index');
    }
}

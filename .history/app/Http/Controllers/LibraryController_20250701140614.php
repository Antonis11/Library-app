<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Library;

class LibraryController extends Controller
{
    public function index() {
        $libraries = Library::all();

        var_dump($libraries);
        die; 

        //dd($libraries);

        return view('library.index');
    }
}

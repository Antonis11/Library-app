<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Library;

class LibraryController extends Controller
{
    public function index() {
        $libraries = Library::all();
        //var_dump($libraries);
        //die; 

        //dd($libraries);

        return view('library.index', [
            'libraries' => $libraries
        ]);
    }

    public function create() {
        return view('library.create');
    }

    public function store(Request $request) {
        $library = new Library;

        $library->name = $request->name;
        $library->description = $request->description;

        $library->save();

        return redirect()->route('library.index');

    }
}

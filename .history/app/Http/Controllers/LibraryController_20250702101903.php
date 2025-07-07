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
        $request->validate([
            'name' => 'required|max:100',
            'description' => 'nullable|min:3'
        ]);

        Library::create($request->input());

        return redirect()->route('library.index');

    }

    public function show() {
        return view(library.show);
    }
}

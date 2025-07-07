<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Library;
use App\Http\Requests\SaveLibraryRequest;

class LibraryController extends Controller
{
    public function index() {
        $libraries = Library::orderBy('created_at')->paginate(3);

        return view('library.index', [
            'libraries' => $libraries
        ]);
    }

    public function create() {
        return view('library.create');
    }

    public function store(SaveLibraryRequest $request) {
        $library = Library::create($request->validated());

        return redirect()->route('library.show', $library)
                        ->with('status', 'Book created');

    }

    public function show(Library $library) {
        return view('library.show', compact('library'));
    }

    public function edit(Library $library) {
        return view('library.edit', compact('library'));
    }

    public function update(SaveLibraryRequest $request, Library $library) {
        $library->update($request->validated());

        return redirect()->route('library.show', $library)
                        ->with('status', 'Book updated');
    }

    public function destroy(Library $library) {
        $library->delete();

        return redirect()->route('library.index')
                        ->with('status', 'Book deleted');
    }

}

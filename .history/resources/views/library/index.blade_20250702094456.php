<x-layout>

<h1>Library</h1>

<a href="{{ route('library.create') }}">New Book</a>

@foreach ($libraries as $library)

    <h2><{{ $library->name }}></h2>
    <p><{{ $library->description }}></p>

@endforeach
</x-layout>
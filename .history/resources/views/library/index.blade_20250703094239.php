<x-layout>

<h1>Library</h1>

<a href="{{ route('library.create') }}">New Book</a>

@foreach ($libraries as $library)

    <h2><a href="{{ route('library.show', library->id }}">{{ $library->name }}</a></h2>
    <p>{{ $library->description }}</p>

@endforeach

</x-layout>
<x-layout>

<h1>{{ $library->name }}</h1>

<p>{{ $library->description }}</p>

<a href="{{ route('library.edit', $library->id) }}">Edit</a>

</x-layout>
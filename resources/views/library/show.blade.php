<x-layout>

<h1>{{ $library->name }}</h1>

<p>{{ $library->description }}</p>

<a href="{{ route('library.edit', $library->id) }}">Edit</a>

<form method="post" action="{{ route('library.destroy', $library) }}">
    @csrf
    @method('DELETE')

    <button>Delete</button>
</form>

</x-layout>
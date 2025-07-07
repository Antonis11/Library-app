<x-layout>

<h1>Edit Library</h1>

<x-errors />

<form method="post" action="{{ route('library.update', $library) }}">

<x-library.form :library="$library" />

</form>

</x-layout>

<x-layout>

<h1>Edit Library</h1>

<x-errors />

<form method="post" action=" {{ route('library.store') }}">

<x-library.form />

</form>

</x-layout>

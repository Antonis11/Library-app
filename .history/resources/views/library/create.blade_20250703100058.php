<x-layout>

<h1>New Book</h1>

<x-errors />

<form method="post" action=" {{ route('library.store') }}">

<x-library.form />

</form>

</x-layout>

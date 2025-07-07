<x-layout>

<h1>New Book</h1>

@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    <ul>
@endif

<form method="post" action=" {{ route('library.store') }}">
    @csrf

    <label for="name">Name</label>
    <input type="text" name="name" id="name" value="{{ old('name') }}">

    <label for="description">Description</label>
    <textarea name="description" id="description">{{ old('description') }}</textarea>

    <button>Save</button>

</form>

</x-layout>
    

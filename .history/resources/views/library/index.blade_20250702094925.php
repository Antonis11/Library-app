<x-layout>

<h1>Library</h1>

<a href="{{ route('library.create') }}">New Book</a>

<?php foreach ($libraries as $library): ?>

    <h2><?= htmlspecialchars($library->name) ?></h2>
    <p><?= htmlspecialchars($library->description) ?></p>

<?php endforeach; ?>

</x-layout>
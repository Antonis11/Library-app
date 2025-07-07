<x-layout>

<h1>Library</h1>

@foreach ($libraries as $library)

    <h2><?= htmlspecialchars($library->name) ?></h2>
    <p><?= htmlspecialchars($library->description) ?></p>

@endforeach
</x-layout>
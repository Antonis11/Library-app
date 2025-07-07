@csrf

<label for="name">Name</label>
<input type="text" name="name" id="name" 
        value="{{ old('name', $library->name ?? '') }}">

<label for="description">Description</label>
<textarea name="description" 
                id="description">{{ old('description', $library->description ?? '') }}</textarea>

<button>Save</button>
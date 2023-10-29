<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Predact- Create</title>
    @vite('resources/css/blogsEdit.css')
    @vite('resources/js/app.js')
    <script src="https://kit.fontawesome.com/80bfb3b6e2.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <h1># Blog Posts - Create</h1>

        <form method="POST" action="{{ route('blog.store') }}">
            @csrf

            <div class="form-group">
                <label for="title">Titel:</label>
                <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}" required>
            </div>

            <div class="form-group">
                <label for="description">Artikel:</label>
                <textarea name="description" id="description" class="form-control" rows="4" required>{{ old('description') }}</textarea>
            </div>

            <div class="form-group">
                <label for="read-time">Leesduur:</label>
                <input type="number" name="read-time" id="read-time" class="form-control" value="{{ old('read-time') }}" required>
            </div>

            <div class="form-group">
                <label for="slug">Slug:</label>
                <input type="text" name="slug" id="slug" class="form-control" value="{{ old('slug') }}" required>
            </div>

            <div class="form-group">
                <label for="image">Image:</label>
                <input type="file" name="image" id="image" class="form-control" value="{{ old('image') }}" required>
            </div>

            <div class="form-group">
                <label for="published">Datum (2023-10-16):</label>
                <input type="text" name="published" id="published" class="form-control" value="{{ old('published') }}" required>
            </div>


            <button type="submit" class="btn btn-primary">Create Post</button>
        </form>

        @error('title')
    <span class="text-danger">{{ $message }}</span>
@enderror

    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Predact- Edit</title>
    @vite('resources/css/blogsEdit.css')
    @vite('resources/js/app.js')
    <script src="https://kit.fontawesome.com/80bfb3b6e2.js" crossorigin="anonymous"></script>
</head>
<body>
    <h1>Edit blog post: {{ old('title', $blogPost->title) }}</h1>


    <form method="POST" action="{{ route('blog.update', $blogPost->id) }}">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $blogPost->title) }}">
        </div>
<br>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea name="description" id="description" class="form-control" rows="4">{{ old('description', $blogPost->description) }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</body>
</html>
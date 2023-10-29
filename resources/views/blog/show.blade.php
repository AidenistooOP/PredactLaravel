<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Predact -</title>
    @vite('resources/css/blogsShow.css')
    @vite('resources/js/app.js')
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/80bfb3b6e2.js" crossorigin="anonymous"></script>
</head>
<body>
     <!-- Specifiek 1 blog hier uit de database gehaald --> 
     <div class="container">
        <a href="{{ url('/blogs') }}" class="btn btn-light"><i class="fas fa-arrow-left"></i> Naar alle posts</a>
        <h1 class="mt-4"># {{ $title }}</h1>
        <p class="article-info"><i class="fas fa-calendar-day"></i> {{ $published }}&nbsp;&nbsp;•&nbsp;&nbsp;<i class="fas fa-calendar-day"></i> Leesduur: {{ $read_time }} minuten</p>
        <div>
            {!! nl2br(e($description)) !!}
        </div>
        
        <div class="social-icons">
            <p style="font-weight: bold;">Deel dit artikel:</p>
            <i class="fa-brands fa-linkedin" style="color: #0058cc; font-size: 30px;"></i>  
                    <i class="fa-brands fa-square-whatsapp" style="color: #04fb14; font-size: 30px"></i>
                    <i class="fa-brands fa-blogger" style="color: #ff5e1a; font-size: 30px;"></i>
                    <a href="https://twitter.com/intent/tweet?text={{$title}}">
                    <i class="fa-brands fa-square-x-twitter" style="color: #0d0d0d; font-size: 30px;"></i>
                    </a>
        </div>
        <br>  
        <form method="POST" action="{{ route('blog.destroy', $blogPost->id) }}">
            @csrf
            @method('DELETE')
            <button id="deleteBtn" type="submit"><i class="fa-solid fa-trash" style="font-size: 14px"></i> Verwijderen</button>
        </form>
        <br>
        <a href="{{ route('blog.edit', $blogPost->id) }}">
            <button id="editBtn"><i class="fa-solid fa-pen-to-square"></i> Wijzigen</button>
        </a>

        
    </div>

    <br> <br>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
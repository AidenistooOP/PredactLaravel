<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Predact- Blogs</title>
    @vite('resources/css/blogsIndex.css')
    @vite('resources/js/app.js')
    <script src="https://kit.fontawesome.com/80bfb3b6e2.js" crossorigin="anonymous"></script>
</head>
<body>
    <div id="firstBg">
        <br>
        <h1>Predact</h1>
        <br>
      </div>
      <div id="secondBg">
<br> <br>
        <h1 style="color: white"># Blog Posts</h1>
        <div class="blog-grid">
            @foreach($blogPosts as $post)
            <a href="{{ route('blog.show', ['title' => $post->slug]) }}">
                <div class="blog-post">
                    <img src="data:image/jpeg;base64,{{ base64_encode($post->image) }}" alt="Image" id="image"> <br>
                        {{ $post->title }}
                </div>
              </a>
            @endforeach
        </div> <br>  <p style="font-size: 18px">Fout gevonden in een van onze blog posts? <a href="mailto:bugs@predact.nl?subject=Fout gevonden in blog:" target="_top">Meld het hier!</a></p>
          <br> <br><br><br><br><br><br>
      </div>
      <div class="footerWrapper">
        <footer class="footer">
          <div class="footerContainer">
            <div class="row">
              <div class="footer-col">
                <h4>Pagina's</h4>
                <ul>
                  <li><a href="/home">Home</a></li>
                  <li><a href="/login">Login</a></li>
                  <li><a href="/offerte">Offerte</a></li>
                  <li><a href="/projecten">Projecten</a></li>
                  <li><a href="#">Privacy Policy</a></li>
                </ul>
              </div>
              <div class="footer-col">
                <h4>Handige links</h4>
                <ul>
                    <li><a href="blogs/minecraft">Minecraft plug-ins</a></li>
                    <li><a href="blogs/office365">Support bij Office 365</a></li>
                    <li><a href="blogs/cryptoblockchain">Cryptocurrency en blockchain</a></li>
                    <li><a href="blogs/backups">Back-up maken</a></li>
                </ul>
              </div>
              <div class="footer-col">
                <h4>Offerte aanvragen</h4>
                <ul>
                  <li><a href="/offerte" id="offerteText">Bent u geïnteresseerd in een unieke website op maat? Dan zit
                      u
                      bij ons aan het juiste
                      adres. </a></li>
                </ul>
              </div>
              <div class="footer-col">
                <h4>Volg ons</h4>
                <div class="social-links">
                  <a href="#"><i class="fab fa-google"></i></a>
                  <a href="#"><i class="fab fa-facebook-f"></i></a>
                  <a href="https://instagram.com/predactsoftware?igshid=MzRlODBiNWFlZA=="><i
                      class="fab fa-instagram"></i></a>
                  <a href="https://www.linkedin.com/company/predact/"><i class="fab fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
        </footer>
      </div>
</body>
</html>
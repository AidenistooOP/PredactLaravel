<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Predact - Projecten</title>
  @vite('resources/css/projecten.css')
  @vite('resources/js/app.js')
  <script src="https://kit.fontawesome.com/80bfb3b6e2.js" crossorigin="anonymous"></script>
  <link rel="icon" href="./images/predact.png" type="image/x-icon">
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6636827498914574"
     crossorigin="anonymous"></script>
</head>

<body>
  <div id="firstBg">
    <br>
    <h1>Predact</h1>
    <br>
  </div>

  <br> <br>

  <div class="grid-container">
    <div class="grid-item">
      <h2>KayFlock</h2> <a href="https://kayflock.aidenonyenwenu.repl.co/"><button><i class="fa-solid fa-paperclip"></i> Open website</button></a> <a href="https://github.com/AidenistooOP/Kayflock"><button><i class="fa-brands fa-github"></i> Github pagina bezoeken</button></a> <br> <br> <br>
      <iframe src="https://kayflock.aidenonyenwenu.repl.co/" frameborder="0" width="100%" height="600"></iframe>
    </div>
    <div class="grid-item">
      <h2>Hoveniersbedrijf Van Tiel</h2><a href="https://hoveniersbedrijftiel.aidenonyenwenu.repl.co/"><button><i class="fa-solid fa-paperclip"></i> Open website</button></a> <br> <br> <br>
      <iframe src="https://hoveniersbedrijftiel.aidenonyenwenu.repl.co/" frameborder="0" width="100%"
        height="600"></iframe>
    </div>
    <div class="grid-item">
      <h2>Restaurant De Pink</h2> <a href="https://restaurant-nieuw.aidenonyenwenu.repl.co/"><button><i class="fa-solid fa-paperclip"></i> Open website</button></a> <a href="https://github.com/AidenistooOP/RestaurantWebsite"><button><i class="fa-brands fa-github"></i> Github pagina bezoeken</button></a> <br> <br>
      
      <iframe src="https://restaurant-nieuw.aidenonyenwenu.repl.co/" frameborder="0" width="100%"
        height="600"></iframe>
    </div>
    <div class="grid-item">
      <h2>Forza Horizon Toernooi</h2><button disabled><i class="fa-solid fa-circle-xmark"></i> Website offline</button> <br> <br>
      <iframe src="https://test-forza.aidenonyenwenu.repl.co" frameborder="0" width="100%" height="600"></iframe>
    </div>
  </div>

  <br> <br>

  <div class="loginCard">
    <h1>Afspraak maken voor een kennismaking!</h1>
    <p>Vul het formulier in, zodat wij met u in contact kunnen komen over uw aankomende project.</p>
    <a class="sign-up-btn" data-cal-link="aidenonyenwenu123/meet-with-me"><i class="fa-solid fa-calendar-days"></i> Plannen</a>
  </div>

   <!-- Cal element-click embed code begins -->
<script type="text/javascript">
  (function (C, A, L) { let p = function (a, ar) { a.q.push(ar); }; let d = C.document; C.Cal = C.Cal || function () { let cal = C.Cal; let ar = arguments; if (!cal.loaded) { cal.ns = {}; cal.q = cal.q || []; d.head.appendChild(d.createElement("script")).src = A; cal.loaded = true; } if (ar[0] === L) { const api = function () { p(api, arguments); }; const namespace = ar[1]; api.q = api.q || []; typeof namespace === "string" ? (cal.ns[namespace] = api) && p(api, ar) : p(cal, ar); return; } p(cal, ar); }; })(window, "https://app.cal.com/embed/embed.js", "init");
Cal("init", {origin:"https://cal.com"});

  
  // Important: Please add following attributes to the element you want to open Cal on click
  // `data-cal-link="aidenonyenwenu123/meet-with-me"`
  // `data-cal-config='{"layout":"month_view"}'`
  
  Cal("ui", {"styles":{"branding":{"brandColor":"#000000"}},"hideEventTypeDetails":false,"layout":"month_view"});
  </script>
  <!-- Cal element-click embed code ends -->


  <br> <br> <br> <br>

  <div class="footerWrapper">
    <footer class="footer">
      <div class="footerContainer">
        <div class="row">
          <div class="footer-col">
            <h4>Pagina's</h4>
            <ul>
              <li><a href="/home">Home</a></li>
              <li><a href="/login">Login</a></li>
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
              <li><a href="/offerte" id="offerteText">Bent u geïnteresseerd in een unieke website op maat? Dan zit u
                  bij ons aan het juiste
                  adres. </a></li>
            </ul>
          </div>
          <div class="footer-col">
            <h4>Volg ons</h4>
            <div class="social-links">
              <a href="#"><i class="fab fa-google"></i></a>
              <a href="#"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
              <a href="#"><i class="fab fa-linkedin"></i></a>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>
</body>

</html>
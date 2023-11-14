<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <meta name='language' content='NL'>
  <title>Predact - Home</title>
  @vite('resources/css/app.css')
  @vite('resources/js/app.js')
  <script src="https://kit.fontawesome.com/80bfb3b6e2.js" crossorigin="anonymous"></script>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6636827498914574"
     crossorigin="anonymous"></script>
</head>

<body>
  <div id="firstBg">
    <br>
    <h1>Predact</h1>
    <br>
  </div>
  <div id="secondBg">
    <br>
    <div class="container">
      <div class="left-column">
        <img src="https://assets.codepen.io/3364143/glass.png" class="left-image" height="400px">
      </div>
      <div class="column right-column">
        <h1 id="changingHead">Uw bedrijf online vindbaar maken!</h1>
        <p>Predact is sinds 2023 dé toonaangevende web ontwikkelingsservice van Nederland. Met onze expertise in het
          bouwen van websites en one-pagers, leveren we hoogwaardige online oplossingen voor jouw bedrijf. Ons team
          van professionals zorgt ervoor dat jouw websites perfect aansluiten bij jouw behoeften en
          wensen. Met onze geavanceerde technologie en legendarische support streven we ernaar om jou de ultieme online
          ervaring te bieden. Vertrouw je online projecten toe aan Predact en laat ons jouw digitale aanwezigheid naar
          nieuwe hoogten tillen.</p>
      </div>
    </div>
    <br> <br> <br>
    <section class="section">
      <h2>Bekijk onze projecten!</h2>
      <p style="width: 80%;">Door het bekijken van onze portfolio projecten krijgt u een diepgaand inzicht in de breedte
        en diepte van onze creatieve mogelijkheden. Ontdek hoe we verschillende uitdagende opdrachten hebben aangepakt
        en innovatieve oplossingen hebben gecreëerd voor onze tevreden klanten.</p>
      <a href="/projecten"><button>Openen</button></a>
    </section>
    
    
    <br> <br> <br>
    <br>

    <h2 id="marginsoftware">Software en tools waar wij mee werken:</h2>
    <section class="skills">
      <div class="container">
        <div class="skills-flex-container">
          <div class="box">
            <div class="image">
              <img src="https://www.svgrepo.com/show/353655/discord-icon.svg" alt="xd">
            </div>
            <div class="title">Discord</div>
          </div>
          <div class="box">
            <div class="image">
              <img src="https://cdn.icon-icons.com/icons2/2699/PNG/512/firebase_logo_icon_171157.png" alt="figma">
            </div>
            <div class="title">FireBase</div>
          </div>
          <div class="box">
            <div class="image">
              <img src="https://raw.githubusercontent.com/Smit-Prajapati/prajapatismit/main/images/html.png" alt="html">
            </div>
            <div class="title">HTML</div>
          </div>
          <div class="box">
            <div class="image">
              <img src="https://raw.githubusercontent.com/Smit-Prajapati/prajapatismit/main/images/css.png" alt="css">
            </div>
            <div class="title">CSS</div>
          </div>
          <div class="box">
            <div class="image">
              <img
                src="https://www.microsoft.com/nl-nl/microsoft-365/blog/wp-content/uploads/sites/49/2022/06/cropped-microsoft_logo_element.png"
                alt="javascript">
            </div>
            <div class="title">Microsoft 365</div>
          </div>
          <div class="box">
            <div class="image">
              <img src="https://raw.githubusercontent.com/Smit-Prajapati/prajapatismit/main/images/photoshop.png"
                alt="photoshop">
            </div>
            <div class="title">Photoshop</div>
          </div>
          <div class="box">
            <div class="image">
              <img src="https://vicimediainc.com/wp-content/uploads/2021/09/GMB-Logo.png"
                alt="Google Business">
            </div>
            <div class="title">Google Business</div>
          </div>

          <div class="box">
            <div class="image">
              <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/1200px-Laravel.svg.png"
                alt="Amazon Web Service">
            </div>
            <div class="title">Laravel</div>
          </div>
        </div>
      </div>
    </section>

    <div class="marginoverons">
      <h2>Een stukje over ons</h2>
      <p>Bij Predact zijn we gepassioneerd bezig met webontwikkeling en digitale oplossingen. Als toonaangevende speler
        in ons vakgebied, hebben we ons sinds onze oprichting in 2023 toegewijd aan het leveren van hoogwaardige
        websites en geavanceerde kassapplicaties voor bedrijven in Nederland en daarbuiten.

        Onze missie is eenvoudig maar krachtig: we willen onze klanten voorzien van op maat gemaakte en innovatieve
        digitale oplossingen die hen helpen excelleren in de steeds veranderende digitale wereld. Of je nu een klein
        bedrijf hebt dat een professionele website nodig heeft om online aanwezig te zijn, of een grotere onderneming
        bent die op zoek is naar een geïntegreerd kassasysteem om de bedrijfsprocessen te stroomlijnen, bij Predact
        staan we voor je klaar.</p>

      <br>

      <br>
      <div class="loginCard">
        <h1>Afspraak maken voor een kennismaking!</h1>
        <p>Vul het formulier in, zodat wij met u in contact kunnen komen over uw aankomende project.</p>
        <a class="sign-up-btn" data-cal-link="aidenonyenwenu123/meet-with-me"><i class="fa-solid fa-calendar-days"></i> Plannen</a>
      </div>

      <br>

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

    <div class="footerWrapper">
      <footer class="footer">
        <div class="footerContainer">
          <div class="row">
            <div class="footer-col">
              <h4>Pagina's</h4>
              <ul>
                <li><a href="#">Home</a></li>
                <li><a href="/login">Login</a></li>
                <li><a href="/projecten">Projecten</a></li>
                <li><a href="#">Privacy Policy</a></li>
              </ul>
            </div>
            <div class="footer-col">
              <h4>Lees over</h4>
              <ul>
                <li><a href="blogs/minecraft">Minecraft plug-ins</a></li>
                <li><a href="blogs/cryptoblockchain">Cryptocurrency en blockchain</a></li>
                <li><a href="blogs/backups">Back-up maken</a></li>
              </ul>
            </div>
            <div class="footer-col">
              <h4>Kom een kop koffie drinken!</h4>
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
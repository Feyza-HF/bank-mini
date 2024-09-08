<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>landing page</title>
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css')}}" />
  </head>
  <body>
    <header>
      <a href="#" class="logo">Feyza Hazimul Fiqri</a>
      <ul class="navmenu">
        <li><a href="/">Home</a></li>
        <li><a href="{{ route('login') }}">Log In</a></li>
      </ul>
    </header>

    <section class="home">
      <div class="home-text">
        <h2>Hello I'm Feyza <i class="ph-bold ph-hand-waving"></i></h2>
        <h3>Road To Front End Developer</h3>
        <p>I want to become a front end developer, i'm from Pontianak,
          and i'm very passionate and dedicated to be Front End Developer.</p>
      </div>
      <div class="home-img">
        <img src="{{asset('image/jett.png')}}" />
      </div>
    </section>

    <div class="socials-icons">
      <a href="#"><i class="ph-bold ph-instagram-logo"></i></a>
      <a href="https://wa.me/6289693712963"><i class="ph-bold ph-whatsapp-logo"></i></a>
      <a href="#"><i class="ph-bold ph-github-logo"></i></a>
    </div>

  </body>
</html>
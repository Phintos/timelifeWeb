<!DOCTYPE html>
<html lang="it">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Timelife's App</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('Welcome/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link rel="stylesheet" href="{{ asset('Welcome/vendor/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('Welcome/vendor/simple-line-icons/css/simple-line-icons.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="{{ asset('Welcome/device-mockups/device-mockups.min.css')}}">

    <!-- Custom styles for this template -->
    <link href="{{ asset('Welcome/css/new-age.min.css')}}" rel="stylesheet">


    
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">


  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fafa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#features">Features</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#download">Download</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
            </li>
            
          </ul>
        </div>
      </div>
    </nav>

    <header class="masthead">
      <div class="container h-100">
        <div class="row h-100">
          <div class="col-lg-7 my-auto">
            <div class="header-content mx-auto">
              <h2 class="mb-5">Timelife è un'applicazione </h2>
                <h1 class="mb-5">Scaricala ora!</h1>
              <a href="#download" class="btn btn-outline btn-xl js-scroll-trigger">Download</a>
            </div>
          </div>
          <div class="col-lg-5 my-auto">
            <div class="device-container">
              <div class="device-mockup iphone6_plus portrait white">
                <div class="device">
                  <div class="screen">
                    <!-- Demo image for screen mockup, you can put an image here, some HTML, an animation, video, or anything else! -->
                    <img src="/Users/gcristini/Documents/Interfaccia/PNG/Interfaccia.png" class="img-fluid" alt="">
                  </div>
                  <div class="button">
                    <!-- You can hook the "home button" to some JavaScript events or just remove it -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>



    <section class="features" id="features">
      <div class="container">
        <div class="section-heading text-center">
          <h2>Archivio illimitato, Ricordi illimitati</h2>
          <p class="text-muted">Scopri alcune curiosità di questa applicazione</p>
          <hr>
        </div>
        <div class="row">
          <div class="col-lg-4 my-auto">
            <div class="device-container">
              <div class="device-mockup iphone6_plus portrait white">
                <div class="device">
                  <div class="screen">
                    <div class="mockup">
                      <!-- Demo image for screen mockup, you can put an image here, some HTML, an animation, video, or anything else! -->
                      <video width="350" height="510" controls autoplay id="video">
                      <source src="/Users/gcristini/Downloads/video3.mp4" type="video/mp4">
                    </video>
                    </div>
                  </div>
                  <div class="button">
                    <!-- You can hook the "home button" to some JavaScript events or just remove it -->
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-8 my-auto">
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-6">
                  <div class="feature-item">
                    <i class="icon-screen-smartphone text-primary"></i>
                    <h3>iOs & Android</h3>
                    <p class="text-muted">L'applicazione è disponibile per qualsiasi dipositivo mobile</p>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="feature-item">
                    <i class="icon-camera text-primary"></i>
                    <h3>Istantanee</h3>
                    <p class="text-muted">Scatta un'istantanea dei tuoi momenti e portala sempre con te</p>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6">
                  <div class="feature-item">
                    <i class="icon-present text-primary"></i>
                    <h3>Gratuita</h3>
                    <p class="text-muted">Questa è un'applicazione completamente gratuita</p>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="feature-item">
                    <i class="icon-lock-open text-primary"></i>
                    <h3>Privacy</h3>
                    <p class="text-muted">Nessuno potrà visualizzare i tuoi contenuti se non sarai tu a volerlo</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="download bg-primary text-center" id="download">
      <div class="container">
        <div class="row">
          <div class="col-md-8 mx-auto">
            <h2 class="section-heading">Scopri di cosa si tratta!</h2>
            <p>La nostra applicazione è disponibile su qualsiasi dispositivo mobile!</p>
            <p>Scaricala ora per iniziare</p>
            <div class="badges">
              <a class="badge-link" href="#"><img src="{{ asset('Welcome/img/google-play-badge.svg')}}" alt=""></a>
              <a class="badge-link" href="#"><img src="{{ asset('Welcome/img/app-store-badge.svg')}}" alt=""></a>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section class="cta">
      <div class="cta-content">
        <div class="container">
          <h2>Registrati.<br>Inizia subito.</h2>
          <!-- ????????????? -->
          <a href="file:///Users/gcristini/Downloads/Registrazione/index.html" class="btn btn-outline btn-xl js-scroll-trigger">Registrati</a>
        </div>
      </div>
      <div class="overlay"></div>
    </section>

    <section class="contact bg-primary" id="contact">
      <div class="container">
        <h2>Condividi il nostro progetto!</h2>
        <ul class="list-inline list-social">
          <li class="list-inline-item social-twitter">
            <a href="#">
              <i class="fa fa-twitter"></i>
            </a>
          </li>
          <li class="list-inline-item social-facebook">
            <a href="#">
              <i class="fa fa-facebook"></i>
            </a>
          </li>
          <li class="list-inline-item social-google-plus">
            <a href="#">
              <i class="fa fa-google-plus"></i>
            </a>
          </li>
        </ul>
      </div>
    </section>

    <footer>
      <div class="container">
        <p>&copy; Timelife Website 2018. All Rights Reserved.</p>
        <ul class="list-inline">
          <li class="list-inline-item">
            <a href="#">Privacy</a>
          </li>
          <li class="list-inline-item">
            <a href="#">Terms</a>
          </li>
          <li class="list-inline-item">
            <a href="#">FAQ</a>
          </li> 
        </ul>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('Welcome/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('Welcome/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Plugin JavaScript -->
    <script src="{{ asset('Welcome/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for this template -->
    <script src="{{ asset('Welcome/js/new-age.min.js')}}"></script>

  </body>

</html>

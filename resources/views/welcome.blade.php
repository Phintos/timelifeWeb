<!DOCTYPE html>
<html lang="it">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" href="{{ asset('Welcome/img/Logo3.png')}}"/>
    <title>Timelife</title>

    <!-- Bootstrap -->
    <link href="{{ asset('Welcome/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Fonts -->
    <link rel="stylesheet" href="{{ asset('Welcome/vendor/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('Welcome/vendor/simple-line-icons/css/simple-line-icons.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="{{ asset('Welcome/device-mockups/device-mockups.min.css')}}">

    <!-- Styles -->
    <link href="{{ asset('Welcome/css/new-age.css')}}" rel="stylesheet">
    <link href="{{ asset('Welcome/css/carusel.css')}}" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ asset('Welcome/code.jquery.com/jquery-1.11.1.min.js')}}"></script>
    <script src="{{ asset('Welcome/maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js')}}"></script>
    <link href="{{ asset('Welcome/maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css')}}" rel="stylesheet" id="bootstrap-css">
    <script src="{{ asset('Welcome/js/fire.js')}}"></script>
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
              <a class="nav-link js-scroll-trigger" href="{{ url('/login')}}">Admin</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    
    <!-- Video -->
    <header class="masthead">
      <video playsinline autoplay muted id="bgvid" >
          <source src="{{asset ('Welcome/img/particleee.mov')}}" type="video/webm">
      </video>
    </header>


    <!-- Features -->
    <section class="features" id="features">
      <div class="container">
        <div class="section-heading text-center">
          <h2>Archivio illimitato, ricordi illimitati</h2>
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
                      <img class="login "src="{{URL::asset('Welcome/img/interfaccia.png')}}">
                    </div>
                  </div>
                  <div class="button">
                    
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
                      <h3>iOs</h3>
                      <p class="text-muted">L'applicazione è disponibile per tutti i dispositivi mobile IOS</p>
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
    
    <!-- Download -->
    <section class="cta" id="download">
      <div id="gradient">
        <div class="cta-content">
          <div class="container" id="kes">
            <h2>Colora i tuoi ricordi</h2>
            <a href="https://itunes.apple.com/it/app/mcdonalds/id1217507712?mt=8&v0=WWW-EUIT-ITSTOP100-FREEAPPS&l=it&ign-mpt=uo%3D4"><img class="center" src="{{ asset('Welcome/img/applee.png')}}" alt=""></a>
          </div>
        </div>
      </div>
    </section>
    
    <!-- Footer -->
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

    <!-- Custom scripts -->
    <script src="{{ asset('Welcome/js/new-age.min.js')}}"></script>
    <script src="{{ asset('Welcome/js/text.js')}}"></script>
  
  </body>
</html>

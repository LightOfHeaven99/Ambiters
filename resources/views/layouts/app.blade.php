<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Ambiters</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Carrois+Gothic+SC" rel="stylesheet">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">


        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Playfair+Display" />
        <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
        <link rel="stylesheet" href="css/ambiters.css" type="text/css">
        <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
        <!--  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->

        <!-- Custom fonts for this template -->
        <link rel="stylesheet" href="css/fontawesome-free/css/all.min.css" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>


        <!-- JS -->
        <script src='js/jquery-3.1.1.min.js'></script>
        <script src='js/bootstrap.min.js'></script>
        <script src='js/ambiters.js'></script>
        <script src='js/bootstrap.bundle.min.js'></script>
        <script src='js/jquery.easing.js'></script>
        <script src='js/jquery.min.js'></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    </head>
    <body id="page-top">

          <!--Navigation-->

          <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
              <a class="navbar-brand js-scroll-trigger" href="/Ambiters/public/"><img src="img/ambiters.png" height="40" width="60"></a>
              <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
              </button>
              <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#start"><b>START</b>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#ambiters"><b>AMBITERS</b></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#szkolenia"><b>SZKOLENIA</b></a>
                  </li>
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#about"><b>O NAS</b></a>
              </li>
              @guest
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('login') }}"><b>{{ __('ZALOGUJ SIĘ') }}</b></a>
                </li>
              @if (Route::has('register'))
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('register') }}"><b>{{ __('REJESTRACJA') }}</b></a>
                </li>
              @endif
              @else
                <li class="nav-item dropdown">
                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                  </a>

                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                      {{ __('Logout') }}
                    </a>
                    <form method="get" action="{{route('user.panel')}}">
                      {{ csrf_field() }}
                      <input type="hidden" name="id" value="{{Auth::user()->id}}">
                      <button type="submit">PANEL</button>
                    </form>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                    </form>
                  </div>
                </li>
            @endguest
                </ul>
              </div>
            </div>
          </nav>
          <!-- Dobra elo, tu jest cały content. Navbar będzie do każdej strony taki sam. Nie będzie trzeba powielać kodu -->



        @yield('content')


        <!-- Footer -->
        <footer id="myFooter">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <h2 class="logo"><a href="#"><br> Ambiters </a></h2>
                    </div>
                    <div class="col-sm-2">
                        <h5>Panel</h5>
                        <ul>
                            <li><a href="#">Start</a></li>
                            <li><a href="#">Rejestracja</a></li>
                            <li><a href="#">Zaloguj się</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-2">
                        <h5>O Nas</h5>
                        <ul>
                            <li><a href="#">Trenerzy</a></li>
                            <li><a href="#">Coś tam</a></li>
                            <li><a href="#">Coś tam</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-2">
                        <h5>Pomoc</h5>
                        <ul>
                            <li><a href="#">Kontakt</a></li>
                            <li><a href=".../public/resources/views/faq">FAQ</a></li>
                            <li><a href="#">Forums</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-3">
                        <div class="social-networks">
                            <a href="#" class="twitter"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="facebook"><i class="fab fa-facebook"></i></a>
                            <a href="#" class="google"><i class="fab fa-google"></i></a>
                        </div>
                        <button type="button" class="btn btn-default">Contact us</button>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <p><b>Ambiters © All rights reserved.</b></p>
            </div>
        </footer>
	<!-- ./Footer -->
    </body>
</html>

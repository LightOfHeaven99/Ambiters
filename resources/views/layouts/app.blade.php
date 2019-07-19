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
        <!-- <script src='js/jquery-3.1.1.min.js'></script> -->
        <script src='js/bootstrap.min.js'></script>
        <script src='js/ambiters.js'></script>
        <script src='js/ambiters.min.js'></script>
        <script src='js/bootstrap.bundle.min.js'></script>
        <script src='js/jquery.easing.js'></script>
        <script src='js/jquery.min.js'></script>
        <!-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->


    </head>
    <body id="page-top">

          <!--Navigation-->

          <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
              <a class="navbar-brand js-scroll-trigger" href="/"><img src="img/ambiters.png" height="40" width="60"></a>
              <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
              </button>
              <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ml-auto">
                  <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#start"><b>START</b>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#ambiters"><b>AMBITERS</b></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#szkolenia"><b>KURSY</b></a>
                  </li>
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#about"><b>O NAS</b></a>
              </li>
              @guest
                <li class="nav-item">
                  <a class="nav-link js-scroll-trigger" href="#register"><b>{{ __('REJESTRACJA') }}</b></a>
                </li>
              @if (Route::has('register'))
                <li class="nav-item">
                  <a class="nav-link js-scroll-trigger" href="{{ route('login') }}"><b>{{ __('ZALOGUJ SIĘ') }}</b></a>
                </li>
              @endif
              @else

              <li class="nav-item dropdown">
                <a id="navbarDropdownMenuLink" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <b>{{ Auth::user()->name }}</b> <span class="caret"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <div class="dropdown-text">
                    <a class="dropdown-item" href="/panel" style="font-weight:100; "><b>PROFIL</b></a>
                    @if(Auth::user()->email=="okragly.rafal@gmail.com")
                      <a class="dropdown-item" href="/admin" style="font-weight:100; "><b>ADMIN</b></a>
                    @endif
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                    </form>
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
                      {{ __('Wyloguj się') }}
                    </a>
                  </div>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="/cart"><b>KOSZYK</b>
                </a>
              </li>
                <!-- <li class="nav-item">
                    <form method="get" action="{{route('user.panel')}}">
                      {{ csrf_field() }}
                      <input type="hidden" name="id" value="{{Auth::user()->id}}">
                      <button type="submit">PROFIL</button>
                    </form>
                  </li>
                  <li class="nav-item">
                  <a class="nav-link js-scroll-trigger" href="{{ route('logout') }}" onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();">
                   <b>{{ __('WYLOGUJ SIĘ') }}</b>
                  </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                  </form>
                </li> -->
            @endguest

                </ul>
              </div>
            </div>
          </nav>
          <!-- Dobra elo, tu jest cały content. Navbar będzie do każdej strony taki sam. Nie będzie trzeba powielać kodu -->


          @include('layouts.message_error')
          @yield('content')


        <!-- Footer -->
        <footer id="myFooter">
            <div class="container">
                <div class="row">
                    <div class="col-sm">
                      <div class="help">
                      <h5>O nas</h5>
                      <p><a href="/contact"><b>Kontakt</b></a></p>
                      <p><a href="/faq"><b>FAQ</b></a></p>
                      <p><a href="#"><b>Regulamin</b></a></p>
                    </div>
                  </div>
                    <div class="col-sm">
                      <div class="help">
                        <h5>Pomoc</h5>
                        <p>
                          <i class="fas fa-home mr-3"></i> Wrocław, Leszczyńskiego 4/29</p>
                        <p>
                          <i class="fas fa-envelope mr-3"></i> ambiters@zenbox.com</p>
                        <p>
                          <i class="fas fa-phone mr-3"></i> +48 234567288</p>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="social-networks">
                            <h5>Znajdziesz nas na:</h5>
                            <br>
                            <a href="#" class="twitter"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="facebook"><i class="fab fa-facebook"></i></a>
                            <a href="#" class="google"><i class="fab fa-google"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <p><b>Ambiters © All rights reserved.</b></p>
                <p><font size="1"><b>Michał Fadrowski & Paweł Główczewski</b></font></p>
            </div>
        </footer>
	<!-- ./Footer -->
    </body>
</html>

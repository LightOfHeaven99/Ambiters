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

        <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
        <link rel="stylesheet" href="css/ambiters.css" type="text/css">
        <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
        <!--  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->


        <!-- JS -->
        <script src='js/jquery-3.1.1.min.js'></script>
        <script src='js/bootstrap.min.js'></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    </head>
    <body>
        <div id="navigation-bar">

          <!--Navigation-->

          <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color:#eeeeee;">
            <div class="container">
              <a class="navbar-brand" href="/Ambiters/public/"><img src="img/ambiters.png" height="40" width="60"></a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                    <a class="nav-link" href="/"><b>Start</b>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/Ambiters/public/"><b>Szkolenia</b></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/Ambiters/public/"><b>O nas</b></a>
                  </li>
                @guest
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}"><b>{{ __('Zaloguj się') }}</b></a>
                  </li>
                @if (Route::has('register'))
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}"><b>{{ __('Rejestracja') }}</b></a>
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

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                      </form>
                    </div>
                  </li>
              @endguest
              <li class="nav-item">
                <a class="nav-link" href="/Ambiters/public/"><b>Koszyk</b></a>
              </li>
                </ul>
              </div>
            </div>
          </nav>
          <!-- Dobra elo, tu jest cały content. Navbar będzie do każdej strony taki sam. Nie będzie trzeba powielać kodu -->

        </div>


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
                            <li><a href="/Ambiters/public/faq">FAQ</a></li>
                            <li><a href="#">Forums</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-3">
                        <div class="social-networks">
                            <a href="#" class="twitter"><i class="fa fa-instagram"></i></a>
                            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="google"><i class="fa fa-google"></i></a>
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


      <!-- Page Content -->
      <!-- Bootsrapa i JQuery masz już podpięte. Wystarczy tylko działać. Wszystkie pliki źródłowe są w folderze public. Jest tego więcej ale to jeśli wolałbyś działać na
      sass a nie css. Wtedy modyfikuje sie pliki w resources. Polecam jednak bezposrednio do public. Da sie tez zrobic rozszerzenia co to naglowkow
      zeby byly na kazdej stronie bez powtarzania kodu ale to pewnie juz ogarniasz, albo dorobimy pozniej. Poki co to tu jest cala piaskownica
      xoxxoxoxoxo -->

      <!-- Update 2.0 : Tu trochę magii Laravela. Tak więc jak widać teraz na tej stronie znajduje się coś co się nazywa content.
      Jest to tak naprawdę rozszerzenie strony app znajdującej się w folderze layouts. Dzięki temu każda strona będzie
      mogła być rozszerzeniem app, w którym znajduje się navbar. Mniej powielania kodu. I logowanie powinno mi teraz fajnie
      działać, więc nooooo, myślałem, że nie będziemy tak robić na początku, ale dużo jednak daje. Tak naprawdę chodzi o to,
      że teraz jak będziesz pisać kod Pablito to lecisz z samym contentem, bez tego całego head, navbar i inne takie. Wszystko podpięte.-->

      @extends('layouts.app')

      @section('content')
            <header class="masthead">
                <section id="start">
                  <div class="laptop-bg">
                    <div class="intro-text">
                      <div class="intro-lead-in text-uppercase">Witaj w</div>
                      <br>
                      <div class="intro-heading text-uppercase">Ambiters</div>
                      <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#ambiters">Pokaż więcej!</a>
                    </div>
                  </div>
                </section>
              </header>

              <section class="page-section" id="ambiters">
                <div class="container">
                  <div class="row">
                    <div class="col-lg-12 text-center">
                      <h2 class="section-heading text-uppercase">Czym jest Ambiters?</h2>
                      <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                    </div>
                  </div>
                  <div class="row text-center">
                    <div class="col-md-4">
                      <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-book fa-stack-1x fa-inverse"></i>
                      </span>
                      <h4 class="service-heading">Wiedza</h4>
                      <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                    </div>
                    <div class="col-md-4">
                      <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-chalkboard-teacher fa-stack-1x fa-inverse"></i>
                      </span>
                      <h4 class="service-heading">Doświadczenie</h4>
                      <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                    </div>
                    <div class="col-md-4">
                      <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-star fa-stack-1x fa-inverse"></i>
                      </span>
                      <h4 class="service-heading">Rozwój</h4>
                      <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                    </div>
                  </div>
                </div>
              </section>

            <section class="bg-light page-section" id="szkolenia">
              <div class="container">
                <div class="row">
                  <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase">Szkolenia</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4 col-sm-6 szkolenia-item">
                    <a class="szkolenia-link" data-toggle="modal" href="#portfolioModal1">
                      <div class="szkolenia-hover">
                        <div class="szkolenia-hover-content">
                          <i class="fas fa-plus fa-3x"></i>
                        </div>
                      </div>
                      <img class="img-fluid" src="../img/portfolio/01-thumbnail.jpg" alt="">
                    </a>
                    <div class="szkolenia-caption">
                      <h4>Szkolenie #1</h4>
                      <p class="text-muted">Matematyka</p>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-6 szkolenia-item">
                    <a class="szkolenia-link" data-toggle="modal" href="#portfolioModal2">
                      <div class="szkolenia-hover">
                        <div class="szkolenia-hover-content">
                          <i class="fas fa-plus fa-3x"></i>
                        </div>
                      </div>
                      <img class="img-fluid" src="img/portfolio/02-thumbnail.jpg" alt="">
                    </a>
                    <div class="szkolenia-caption">
                      <h4>Szkolenie #2</h4>
                      <p class="text-muted">Zarządzanie</p>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-6 szkolenia-item">
                    <a class="szkolenia-link" data-toggle="modal" href="#portfolioModal3">
                      <div class="szkolenia-hover">
                        <div class="szkolenia-hover-content">
                          <i class="fas fa-plus fa-3x"></i>
                        </div>
                      </div>
                      <img class="img-fluid" src="img/portfolio/03-thumbnail.jpg" alt="">
                    </a>
                    <div class="szkolenia-caption">
                      <h4>Szkolenie #3</h4>
                      <p class="text-muted">Organizacja</p>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-6 szkolenia-item">
                    <a class="szkolenia-link" data-toggle="modal" href="#portfolioModal4">
                      <div class="szkolenia-hover">
                        <div class="szkolenia-hover-content">
                          <i class="fas fa-plus fa-3x"></i>
                        </div>
                      </div>
                      <img class="img-fluid" src="img/portfolio/04-thumbnail.jpg" alt="">
                    </a>
                    <div class="szkolenia-caption">
                      <h4>Szkolenie #4</h4>
                      <p class="text-muted">Fizyka</p>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-6 szkolenia-item">
                    <a class="szkolenia-link" data-toggle="modal" href="#portfolioModal5">
                      <div class="szkolenia-hover">
                        <div class="szkolenia-hover-content">
                          <i class="fas fa-plus fa-3x"></i>
                        </div>
                      </div>
                      <img class="img-fluid" src="img/portfolio/05-thumbnail.jpg" alt="">
                    </a>
                    <div class="szkolenia-caption">
                      <h4>Szkolenie #5</h4>
                      <p class="text-muted">Podstawy informatyki</p>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-6 szkolenia-item">
                    <a class="szkolenia-link" data-toggle="modal" href="#portfolioModal6">
                      <div class="szkolenia-hover">
                        <div class="szkolenia-hover-content">
                          <i class="fas fa-plus fa-3x"></i>
                        </div>
                      </div>
                      <img class="img-fluid" src="img/portfolio/06-thumbnail.jpg" alt="">
                    </a>
                    <div class="szkolenia-caption">
                      <h4>Szkolenie #6</h4>
                      <p class="text-muted">Fotografia</p>
                    </div>
                  </div>
                </div>
              </div>


              <!-- tu masz przycisk do logowania. Można wklieć gdzie chcesz i przerabiać. Jak nie zalogowany to masz zarejestruj, a jak
              zaloowany to wypisuje Ci jestes juz zalogowany-->

              @guest
                <a class="nav-link js-scroll-trigger" href="{{ route('register') }}"><b>{{ __('REJESTRACJA') }}</b></a>
              @else
                Jestes juz zalogowany
              @endguest
          </section>

          <section class="page-section" id="about">
            <div class="container">
              <div class="row">
                <div class="col-lg-12 text-center">
                  <h2 class="section-heading text-uppercase">Nasi trenerzy</h2>
                  <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-4">
                  <div class="team-member">
                    <img class="mx-auto rounded-circle" src="img/team/pablo.jpg" alt="">
                    <h4>Paweł Główczewski</h4>
                    <p class="text-muted">Trener #1</p>
                    <ul class="list-inline social-buttons">
                      <li class="list-inline-item">
                        <a href="#">
                          <i class="fab fa-facebook"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#">
                          <i class="fab fa-google"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#">
                          <i class="fab fa-instagram"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="team-member">
                    <img class="mx-auto rounded-circle" src="img/team/rafal.jpg" alt="">
                    <h4>Rafał Okrągły</h4>
                    <p class="text-muted">Trener #2</p>
                    <ul class="list-inline social-buttons">
                      <li class="list-inline-item">
                        <a href="#">
                          <i class="fab fa-facebook"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#">
                          <i class="fab fa-google"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#">
                          <i class="fab fa-instagram"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="team-member">
                    <img class="mx-auto rounded-circle" src="img/team/michal.jpg" alt="">
                    <h4>Michał Fadrowski</h4>
                    <p class="text-muted">Trener #3</p>
                    <ul class="list-inline social-buttons">
                      <li class="list-inline-item">
                        <a href="#">
                          <i class="fab fa-facebook"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#">
                          <i class="fab fa-google"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#">
                          <i class="fab fa-instagram"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-4">
                  <div class="team-member">
                    <img class="mx-auto rounded-circle" src="../img/team/pablo.jpg" alt="">
                    <h4>Krzysztof Zaraza</h4>
                    <p class="text-muted">Trener #4</p>
                    <ul class="list-inline social-buttons">
                      <li class="list-inline-item">
                        <a href="#">
                          <i class="fab fa-facebook"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#">
                          <i class="fab fa-google"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#">
                          <i class="fab fa-instagram"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="team-member">
                    <img class="mx-auto rounded-circle" src="../img/team/rafal.jpg" alt="">
                    <h4>Krystian Karczyński</h4>
                    <p class="text-muted">Trener #5</p>
                    <ul class="list-inline social-buttons">
                      <li class="list-inline-item">
                        <a href="#">
                          <i class="fab fa-facebook"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#">
                          <i class="fab fa-google"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#">
                          <i class="fab fa-instagram"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="team-member">
                    <img class="mx-auto rounded-circle" src="../img/team/michal.jpg" alt="">
                    <h4>Janusz Górniak</h4>
                    <p class="text-muted">Trener #6</p>
                    <ul class="list-inline social-buttons">
                      <li class="list-inline-item">
                        <a href="#">
                          <i class="fab fa-facebook"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#">
                          <i class="fab fa-google"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#">
                          <i class="fab fa-instagram"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="row">
                  <div class="col-lg-8 mx-auto text-center">
                    <p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
            </div>
          </div>
        </div>
      </section>




      <!-- Bootstrap core JavaScript -->
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
      @endsection

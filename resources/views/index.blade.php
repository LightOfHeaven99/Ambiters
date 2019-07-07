  <!-- Page Content -->

      @extends('layouts.app')
      @section('content')
            <header class="masthead">
                <section id="start">
                  <div class="laptop-bg">
                    <div class="intro-text">
                      <div class="intro-lead-in text-uppercase">Profesjonalne</div><br>
                      <div class="intro-lead-in text-uppercase">Korepetycje</div><br>
                      <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#ambiters">Pokaż więcej!</a>
                    </div>
                  </div>
                </section>
              </header>

              @guest
              @else
              <section class="bg-light page-section" id="register">
                <div class="container">
                  <div class="row">
                    <div class="col-lg-12 text-center">
                      <p class="register-text text-uppercase">Witaj!</p>
                      <font size="5">Przejdź do swojego profilu, aby obejrzeć dostępne szkolenia oraz ankiety.</font><br><br>
                      <form method="get" action="{{route('user.panel')}}">
                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{Auth::user()->id}}">
                        <button class="btn btn-primary btn-xl" type="submit">PANEL UŻYTKOWNIKA</button>
                      </form>
                    </div>
                  </div>
                </div>
              </section>
              @endguest

              <section class="page-section" id="ambiters">
                <div class="container">
                  <div class="row">
                    <div class="col-lg-12 text-center">
                      <h2 class="section-heading text-uppercase">Czym jest Ambiters?</h2>
                      <h3 class="section-subheading text-muted">Dowiedz się czym się zajmujemy!</h3>
                    </div>
                  </div>
                  <div class="row text-center">
                    <div class="col-md-4">
                      <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-book fa-stack-1x fa-inverse"></i>
                      </span>
                      <h4 class="service-heading">Wiedza</h4>
                      <p class="text-muted">Jeżeli decydujemy się na szkolenie innych osób z danego obszaru zdecydowanie uważamy się za ekspertów w tej dziedzinie! Setki skutecznie wytłumaczonych zadań. Setki skutecznie nawiązanych kontaktów. Setki sukcesów na Waszych kontach.</p>
                    </div>
                    <div class="col-md-4">
                      <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-chalkboard-teacher fa-stack-1x fa-inverse"></i>
                      </span>
                      <h4 class="service-heading">Społeczność</h4>
                      <p class="text-muted">Wspólnie tworzymy coś niezwykłego! To dzięki Wam możemy wzajemnie się rozwijać. Ambiters to coś więcej niż zwykłe korepetycje. Dołącz do ambitnych i ciesz się wspólnie spędzonymi chwilami nie tylko podczas ale również po zajęciach na prywatnych wspólnych firmowych wyjściach!</p>
                    </div>
                    <div class="col-md-4">
                      <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-star fa-stack-1x fa-inverse"></i>
                      </span>
                      <h4 class="service-heading">Doświadczenie</h4>
                      <p class="text-muted">Starannie wyselekcjonowani korepetytorzy z wieloletnim doświadczeniem w nauczaniu doskonale opanowali metody skutecznego przekazywania wiedzy w sposób kreatywny i zachęcający do jej zgłębiania. Nasz zespół tworzą tylko i wyłącznie profesjonaliści! Zanim do Nas dołączą przechodzą szereg testów aby współpracowało się Wam jak najlepiej!</p>
                    </div>
                  </div>
                </div>
              </section>

            <section class="bg-light page-section" id="szkolenia">
              <div class="container">
                <div class="row">
                  <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase">Szkolenia</h2>
                    <h3 class="section-subheading text-muted">Wybierz interesujący Cię temat kursu, w konkretny dzień i godzinę, w konkretnym miejscu i zobacz czego nauczysz się na szkoleniu klikając plusik pod danym szkoleniem.</h3>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4 col-sm-6 szkolenia-item">
                    <!-- <a class="szkolenia-link" data-toggle="modal" href="/start">
                      <div class="szkolenia-hover">
                        <div class="szkolenia-hover-content">
                          <i class="fas fa-plus fa-3x"></i>
                        </div>
                      </div> -->
                      <img class="img-fluid" src="../img/portfolio/01-thumbnail.jpg" alt="">
                    </a>
                    <div class="szkolenia-caption">
                      <h4>Matematyka</h4>
                      <p class="text-muted">15.09.2019<br>18:30</p>
                      <a href="/courses"><i class="btn btn-primary fas fa-plus fa-2x"></i></a>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-6 szkolenia-item">
                    <a class="szkolenia-link" data-toggle="modal" href="/courses">
                      <!-- <div class="szkolenia-hover">
                        <div class="szkolenia-hover-content">
                          <i class="fas fa-plus fa-3x"></i>
                        </div>
                      </div> -->
                      <img class="img-fluid" src="img/portfolio/02-thumbnail.jpg" alt="">
                    </a>
                    <div class="szkolenia-caption">
                      <h4>Zarządzanie</h4>
                      <p class="text-muted">16.10.2019<br>15:00</p>
                      <a href="/courses"><i class="btn btn-primary fas fa-plus fa-2x"></i></a>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-6 szkolenia-item">
                    <a class="szkolenia-link" data-toggle="modal" href="#portfolioModal3">
                      <!-- <div class="szkolenia-hover">
                        <div class="szkolenia-hover-content">
                          <i class="fas fa-plus fa-3x"></i>
                        </div>
                      </div> -->
                      <img class="img-fluid" src="img/portfolio/03-thumbnail.jpg" alt="">
                    </a>
                    <div class="szkolenia-caption">
                      <h4>Organizacja</h4>
                      <p class="text-muted">16.10.2019<br>15:00</p>
                      <a href="/courses"><i class="btn btn-primary fas fa-plus fa-2x"></i></a>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-6 szkolenia-item">
                    <a class="szkolenia-link" data-toggle="modal" href="#portfolioModal4">
                      <!-- <div class="szkolenia-hover">
                        <div class="szkolenia-hover-content">
                          <i class="fas fa-plus fa-3x"></i>
                        </div>
                      </div> -->
                      <img class="img-fluid" src="img/portfolio/04-thumbnail.jpg" alt="">
                    </a>
                    <div class="szkolenia-caption">
                      <h4>Fizyka</h4>
                      <p class="text-muted">16.10.2019<br>15:00</p>
                      <a href="/courses"><i class="btn btn-primary fas fa-plus fa-2x"></i></a>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-6 szkolenia-item">
                    <a class="szkolenia-link" data-toggle="modal" href="/courses">
                      <img class="img-fluid" src="img/portfolio/05-thumbnail.jpg" alt="">
                    </a>
                    <div class="szkolenia-caption">
                      <h4>Podstawy informatyki</h4>
                      <p class="text-muted">16.10.2019<br>15:00</p>
                      <a href="/courses"><i class="btn btn-primary fas fa-plus fa-2x"></i></a>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-6 szkolenia-item">
                    <a class="szkolenia-link" data-toggle="modal" href="#portfolioModal6">
                      <!-- <div class="szkolenia-hover">
                        <div class="szkolenia-hover-content">
                          <i class="fas fa-plus fa-3x"></i>
                        </div>
                      </div> -->
                      <img class="img-fluid" src="img/portfolio/06-thumbnail.jpg" alt="">
                    </a>
                    <div class="szkolenia-caption">
                      <h4>Telekomunikacja</h4>
                      <p class="text-muted">16.10.2019<br>15:00</p>
                      <a href="/courses"><i class="btn btn-primary fas fa-plus fa-2x"></i></a>
                    </div>
                  </div>
                </div>
                <br>
                <div class="col-lg-12 text-center">
                  <h2>Chcesz zobaczyć więcej?</h2>
                  <br>
                  <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="/courses">Kup szkolenie</a>
                </div>
              </div>
          </section>

          <section class="page-section" id="about">
            <div class="container">
              <div class="row">
                <div class="col-lg-12 text-center">
                  <h2 class="section-heading text-uppercase">Nasi trenerzy</h2>
                  <h3 class="section-subheading text-muted">Właśnie te osoby poprowadzą Ciebie przez nasze kursy!</h3>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
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
                <div class="col-sm-6">
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
              <div class="row">
                  <div class="col-lg-8 mx-auto text-center">
                    <p class="large text-muted">Szukasz ciekawej pracy? Masz nie małe doświadczenie w nauczaniu w biologi, chemii, przedsiębiorczości i innych przedmiotach ? Aplikuj wypełniając krótką ankietę dostępną <a href="#ankieta">tutaj</a>.</p>
            </div>
          </div>
        </div>
      </section>

      <section class="bg-light page-section" id="register">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 text-center">
            @guest
              <p class="register-text text-uppercase">Dołącz do Ambiters już teraz!</p>
              <a class="btn btn-secondary btn-xl text-uppercase js-scroll-trigger" href="{{ route('register') }}"><b>{{ __('ZAREJESTRUJ SIĘ!') }}</b></a>
            @else
            <p class="register-text text-uppercase">Dziękujemy za rejestrację!</p>
            @endguest
            </div>
          </div>
        </div>
      </section>

      <section class="page-section">

      </section>




      <!-- Bootstrap core JavaScript -->
      <!-- <script src='js/jquery-3.1.1.min.js'></script> -->
      <script src='js/bootstrap.min.js'></script>
      <script src='js/ambiters.js'></script>
      <script src='js/bootstrap.bundle.min.js'></script>
      <script src='js/jquery.easing.js'></script>
      <script src='js/jquery.min.js'></script>
      <!-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
      @endsection

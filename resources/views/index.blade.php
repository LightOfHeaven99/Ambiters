  <!-- Page Content -->

      @extends('layouts.app')
      @section('content')
            <header class="masthead">
                <section id="start">
                  <div class="laptop-bg">
                    <div class="intro-text">
                      <div class="intro-lead-in text-uppercase hidden-xs">Profesjonalne</div><br>
                      <div class="intro-lead-in text-uppercase hidden-xs">Korepetycje</div><br>
                      <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#ambiters">Pokaż więcej!</a>
                  </div>
                </section>
              </header>

              @guest
              @else
              <section class="page-section" id="register">
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

              <section class="bg-light page-section" id="ambiters">
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

              <section class="page-section">
                <div class="container">
                  <div class="row">
                    <div class="col-lg-12 text-center">
                      <h3 class="section-heading text-uppercase">Co zyskujesz dzięki współpracy z nami?</h3>
                      <br>
                      <ul class="list-inlines" style="list-style-type: disc; text-align: left; font-size: 22px;">
                        <li>Do 150 minut zajęć z przerwą. &#9201;</li>
                        <li>Świetna lokalizacja w centrum. &#128270;</li>
                        <li>Grupa na Facebook’u tylko dla klientów. &#128172;</li>
                        <li>Najniższa cena na rynku. &#128202;</li>
                        <li>Stała cena niezależnie od ilości osób. &#128176;</li>
                        <li>Ambitnych, zmotywowanych korepetytorów w drodze po Twój sukces. &#128161;</li>
                        <li>Bonusy o których dowiesz się po zajęciach! &#11088;</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </section>

            <section class="bg-light page-section" id="szkolenia">
              <div class="container">
                <div class="row">
                  <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase">Kursy</h2>
                    <h3 class="section-subheading text-muted">Wybierz interesujący Cię temat kursu, w konkretny dzień i godzinę, w konkretnym miejscu i zobacz czego nauczysz się na szkoleniu klikając "Szczegóły" pod danym szkoleniem.</h3>
                  </div>
                </div>
                <div class="row">
                  @if(count($courses)>0)
                    @foreach($courses->all() as $course)
                      <div class="col-md-4 col-sm-6 szkolenia-item">
                        <a class="szkolenia-link">
                          <img class="img-fluid" src="img/portfolio/{{$course->img}}" alt="">
                        </a>
                        <div class="szkolenia-caption">
                          <h4>{{$course->title}}</h4>
                          <h6>{{$course->subtitle}}</h6>
                          <p class="text-muted">{{$course->day}}<br>{{substr($course->time, 0 , 5)}}</p>
                          <a class="szkolenia-link" data-toggle="modal" href="#course{{$course->id}}">
                          <div class="szkolenia-hover">
                            <div class="szkolenia-hover-content">
                            <i class="btn btn-primary text-uppercase">SZCZEGÓŁY</i>
                          </a>
                            </div>
                          </div>
                          <br>
                          @guest
                            @if($course->registered >= $course->slots )
                              <b>BRAK MIEJSC</b>
                            @else
                              <a href="{{ route('register') }}"><button class="btn btn-primary" type="button">
                              <i class="fas fa-shopping-cart"></i>Kup teraz</button></a>
                            @endif
                          @else
                            <div class=" " style="visibility: hidden; z-index: 30; position: fixed;">
                              {{$id= Auth::user()->id}}
                              {{$register =  App\Registers::all()->where('userID', $id)->where('courseID', $course->id)}}
                            </div>
                            @if(0==count($register))
                              @if($course->registered >= $course->slots )
                                <b>BRAK MIEJSC</b>
                              @else
                                <form method="post" action="{{route('register.create')}}">
                                  {{ csrf_field() }}
                                  <input type="hidden" name="UserID" value="{{Auth::user()->id}}">
                                  <input type="hidden" name="UserName" value="{{Auth::user()->name}}">
                                  <input type="hidden" name="CourseID" value="{{$course->id}}">
                                  <input type="hidden" name="CourseName" value="{{$course->title}}">
                                  <input type="hidden" name="price" value="{{$course->price}}">
                                  <button class="btn btn-primary" type="submit"><i class="fas fa-shopping-cart"></i>Kup teraz</button>
                                </form>
                                @endif
                              @else
                                ZAPISANO

                            @endif
                          @endguest

                        </div>
                        </div>
                        @endforeach
                        @endif
                      </div>

                      <br><br>
                      <div class="">
                        <div class="col-lg-12 text-center">
                          <p><font size="4"><b>Nie wiesz jak się zapisać? Kliknij na przycisk poniżej, gdzie krok po kroku tłumaczymy jak zakupić kurs!</b></font></p>
                          <a class="szkolenia-link" data-toggle="modal" href="#instruction">
                          <div class="szkolenia-hover">
                            <div class="szkolenia-hover-content">
                            <i class="btn btn-primary text-uppercase">INSTRUKCJA</i>
                          </a>
                      </div>
                    </div>
                </div>
                <br>
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
                    <img class="mx-auto rounded-circle" src="img/team/daniel.jpg" alt="">
                    <h4>Daniel Tusiński</h4>
                    <p class="text-muted">Absolwent kierunku finanse i rachunkowość o specjalizacji rynki finansowe. Od wielu lat działam na rynku korepetycji z matematyki z ogromną skutecznością. W wolnych chwilach interesuje się literaturą fantastyczną oraz jestem pasjonatem kultury czeskiej i grywam w szachy.</p>
                    <ul class="list-inline social-buttons">
                      <li class="list-inline-item">
                        <a href="#">
                          <i class="fab fa-facebook"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#">
                          <i class="fab fa-youtube"></i>
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
                    <p class="text-muted">Student Politechniki Wrocławskiej wydziału Mechanicznego. Przygotowaniami z przedmiotów ścisłych zajmuję się od kilku lat, a w ostatnim roku liczba osób, która skorzystała z mojej pomocy przekroczyła 60. Głównie interesuję się dietetyką, sprzedażą i przedsiębiorczością. W życiu stawiam na otwartość i szczerość.
</p>
                    <ul class="list-inline social-buttons">
                      <li class="list-inline-item">
                        <a href="#">
                          <i class="fab fa-facebook"></i>
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
                    <p class="large text-muted">Szukasz ciekawej pracy? Masz nie małe doświadczenie w nauczaniu w biologi, chemii, przedsiębiorczości i innych przedmiotach ? Aplikuj wypełniając krótką ankietę dostępną <a target="_blank" href="https://docs.google.com/forms/d/e/1FAIpQLSecsASHW-qFofLlUpFLNV6j5-mJrDe3uR9M-hMGQM3DM_dHiw/viewform">tutaj</a>.</p>
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
              <a class="btn btn-secondary btn-xl text-uppercase js-scroll-trigger" href="{{ route('register') }}"><b>{{ __('PRZEJDŹ DALEJ!') }}</b></a>
            @else
            <p class="register-text text-uppercase">Dziękujemy za rejestrację!</p>
            @endguest
            </div>
          </div>
        </div>
      </section>

      <section class="page-section">

      </section>



@if(count($courses)>0)
  @foreach($courses->all() as $course)

    <div class="portfolio-modal modal fade" id="course{{$course->id}}" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <h2 class="text-uppercase">{{$course->title}}</h2>
                  <h4 class="text-uppercase">{{$course->subtitle}}</h4>
                  <p>{{$course->description}}</p>
                  <b>Czego się nauczysz?</b>
                  <br><br>
                  <ul class="list-inline" style="list-style-type: disc;">
                    @if($course->toLearn1!=null)
                    <li>{{$course->toLearn1}}</li>
                    @endif
                    @if($course->toLearn2!=null)
                    <li>{{$course->toLearn2}}</li>
                    @endif
                    @if($course->toLearn3!=null)
                    <li>{{$course->toLearn3}}</li>
                    @endif
                    @if($course->toLearn4!=null)
                    <li>{{$course->toLearn4}}</li>
                    @endif
                    @if($course->toLearn5!=null)
                    <li>{{$course->toLearn5}}</li>
                    @endif
                  </ul>
                  <br>
                  <ul class="list-inline">
                    <li><b>Data: {{$course->day}}<br>{{substr($course->time, 0 , 5)}}</b></li>
                    <li><b>Czas trwania: {{$course->timeEnd}}</b></li>
                    <li><b>Cena: {{$course->price}}zł</b></li>
                    <li><b>Miejsce: {{$course->place}}</b></li>
                  </ul>
                  @guest
                    @if($course->registered >= $course->slots )
                      <b>BRAK MIEJSC</b>
                    @else
                      <a href="{{ route('register') }}"><button class="btn btn-primary" type="button">
                      <i class="fas fa-shopping-cart"></i>Kup teraz</button></a>
                    @endif
                  @else
                    <div class=" " style="visibility: hidden; z-index: 30; position: fixed;">
                      {{$id= Auth::user()->id}}
                      {{$register =  App\Registers::all()->where('userID', $id)->where('courseID', $course->id)}}
                    </div>
                    @if(0==count($register))
                      @if($course->registered >= $course->slots )
                        BRAK MIEJSC
                      @else
                        <form method="post" action="{{route('register.create')}}">
                          {{ csrf_field() }}
                          <input type="hidden" name="UserID" value="{{Auth::user()->id}}">
                          <input type="hidden" name="UserName" value="{{Auth::user()->name}}">
                          <input type="hidden" name="CourseID" value="{{$course->id}}">
                          <input type="hidden" name="CourseName" value="{{$course->title}}">
                          <input type="hidden" name="price" value="{{$course->price}}">
                          <button class="btn btn-primary" type="submit"><i class="fas fa-shopping-cart"></i>Kup teraz</button>
                        </form>
                        @endif
                      @else
                        ZAPISANO
                    @endif
                  @endguest
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  @endforeach
@endif

<div class="portfolio-modal modal fade" id="instruction" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="close-modal" data-dismiss="modal">
        <div class="lr">
          <div class="rl"></div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <div class="modal-body">
              <h2 class="text-uppercase">Jak zakupić kurs?</h2>
              <p class="item-intro text-muted">Krótka instrukcja krok po kroku.</p>
              <ol class="list-inlines2" style="text-align: left; font-size: 22px;">
                <li>Zarejestruj się, potwierdź e-mail i zaloguj.</li>
                <li>Przejdź do zakładki kursy</li>
                <li>Wybierz temat, który Cię interesuje.</li>
                <li>Kliknij ,,szczegóły” aby dowiedzieć się o dacie, miejscu oraz o tym czego się nauczysz.</li>
                <li>Kliknij ,,Kup teraz” aby zakupić kurs. Zostaniesz przeniesiony do koszyka gdzie musisz potwierdzić zakup.</li>
                <li>Otrzymasz maila z danymi do wpłaty.</li>
                <li>Po wpłacie otrzymasz maila potwierdzającego oraz punkty na konto.</li>
                <li>Przyjdź na zajęcia w wyznaczonym terminie.</li>
                <li>Wymieniaj punkty w panelu użytkownika na tańsze lekcje grupowe jak i indywidualne. Enjoy!</li>
              </ol>
              <button class="btn btn-primary" data-dismiss="modal" type="button">
                <i class="fas fa-times"></i>
                Zamknij</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>




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

@extends('layouts.app')

@section('content')
  <section class="faq-section">
    <div class="container">
      <div class="row">
        <!-- START FAQ SECTION -->
        <div class="col-md-6 offset-md-3">
          <div class="faq-title text center pb-3">
            <h2>FREQUENTLY ASKED QUETIONS</h2>
          </div>
        </div>
        <div class="col-md-6 offset-md-3">
          <div class="faq" id="accordion">
            <div class="card">
                <div class="card-header" id="faqHeading-1">
                    <div class="mb-0">
                        <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-1" data-aria-expanded="true" data-aria-controls="faqCollapse-1">
                            <span class="badge">1</span>Czym jest Ambiters?
                        </h5>
                    </div>
                </div>
                <div id="faqCollapse-1" class="collapse" aria-labelledby="faqHeading-1" data-parent="#accordion">
                    <div class="card-body">
                        <p>Ambiters to incijatywa poświęcona szkoleniom, dzięki którym mlodzi ludzie są w stanie szkolić się wedlug swoich potrzeb. </p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="faqHeading-2">
                    <div class="mb-0">
                        <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-2" data-aria-expanded="false" data-aria-controls="faqCollapse-2">
                            <span class="badge">2</span> Ile kosztuje jeden kurs?
                        </h5>
                    </div>
                </div>
                <div id="faqCollapse-2" class="collapse" aria-labelledby="faqHeading-2" data-parent="#accordion">
                    <div class="card-body">
                        <p>W zaleznosci od dlugosci kursu, poziomu zaawansowania oraz ilosci prowadzacych, cena kursów może ulegać znanczym zmianon w stosunku do cen pozostalych inicjatyw.</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="faqHeading-3">
                    <div class="mb-0">
                        <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-3" data-aria-expanded="false" data-aria-controls="faqCollapse-3">
                            <span class="badge">3</span> Jak można się zarejestrować?
                        </h5>
                    </div>
                </div>
                <div id="faqCollapse-3" class="collapse" aria-labelledby="faqHeading-3" data-parent="#accordion">
                    <div class="card-body">
                        <p>W pasku nawigacyjnym strony należy nacisnąć na zaklade "Zarejestruj". Po przekierowanie należy podać swoje imię, nazwsiko, adres e-mail oraz numer kontaktowy. Następine na podany adres e-mail zostanie wyslana wiadomość potwierdzająca rejestrację oraz weryfikacja.</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="faqHeading-4">
                    <div class="mb-0">
                        <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-4" data-aria-expanded="false" data-aria-controls="faqCollapse-4">
                            <span class="badge">4</span> Co ile odbywają się szkolenia?
                        </h5>
                    </div>
                </div>
                <div id="faqCollapse-4" class="collapse" aria-labelledby="faqHeading-4" data-parent="#accordion">
                    <div class="card-body">
                        <p>Nie ma regularności odnośnie danych szkoleń.</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="faqHeading-5">
                    <div class="mb-0">
                        <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-5" data-aria-expanded="false" data-aria-controls="faqCollapse-5">
                            <span class="badge">5</span> Jak można się skontaktować??
                        </h5>
                    </div>
                </div>
                <div id="faqCollapse-5" class="collapse" aria-labelledby="faqHeading-5" data-parent="#accordion">
                    <div class="card-body">
                        <p> Zaklada "kontakt".</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>

@endsection

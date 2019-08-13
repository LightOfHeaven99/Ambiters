@extends('layouts.app2')

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
                      <p>Jesteśmy zespołem młodych osób, pasjonujących się nauką innych. Zdecydowanie wyróżnia Nas determinacja w dążeniu do osiągnięcia sukcesu, zbudowaniu silnej marki a taka jest tylko możliwa gdy Nasi klienci są w 100 % zadowoleni. Pomimo zajęć grupowych każdy jest traktowany indywidualnie. Zrobimy wszystko aby spełnić Wasze oczekiwania!</p>
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
                        <p>Każdy kurs dla przedmiotów maturalnych jest w stałej cenie 60 zł za 2,5 godzinne zajęcia.
Pozostałe wydarzenia, kursy organizowane dodatkowo przez Nasz zespół będą wyceniane indywidualnie a informacja o cenie pojawi się przy kursie.</p>
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
                        <p>W pasku nawigacyjnym strony należy nacisnąć na zakładkę "Zarejestruj". Po przekierowanie należy podać swoje imię, nazwisko, adres e-mail oraz numer kontaktowy. Następnie na podany adres e-mail zostanie wysłana wiadomość potwierdzająca rejestrację oraz weryfikacja. </p>
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
                        <p>Kursy odbywają się regularnie co weekend w sobotę i niedzielę. Dodatkowe zajęcia mogą mieć indywidualny termin.</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="faqHeading-5">
                    <div class="mb-0">
                        <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-5" data-aria-expanded="false" data-aria-controls="faqCollapse-5">
                            <span class="badge">5</span> Jak zapisać się na zajęcia?
                        </h5>
                    </div>
                </div>
                <div id="faqCollapse-5" class="collapse" aria-labelledby="faqHeading-5" data-parent="#accordion">
                    <div class="card-body">
                        <p>Po rejestracji kliknij zakładkę ,, kursy’’, znajdziesz tam dostępne kursy z tematem, datą i miejscem a także informacją czego się nauczysz. Kliknij kup teraz, a po przeniesieniu do koszyka i wybraniu opcji ,, zapłać’’ dostaniesz maila z numerem konta, kwotą oraz tytułem przelewu. Po opłaceniu zamówienia w ciągu maksymalnie 2-3 dni Twój udział w kursie zostanie zatwierdzony.</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="faqHeading-6">
                    <div class="mb-0">
                        <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-6" data-aria-expanded="false" data-aria-controls="faqCollapse-6">
                            <span class="badge">6</span> Ilu osobowe są grupy?
                        </h5>
                    </div>
                </div>
                <div id="faqCollapse-6" class="collapse" aria-labelledby="faqHeading-6" data-parent="#accordion">
                    <div class="card-body">
                        <p>Grupy są zwykle do 8 osób. Mogą występować większe.</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="faqHeading-7">
                    <div class="mb-0">
                        <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-7" data-aria-expanded="false" data-aria-controls="faqCollapse-7">
                            <span class="badge">7</span>Ile trwają zajęcia?
                        </h5>
                    </div>
                </div>
                <div id="faqCollapse-7" class="collapse" aria-labelledby="faqHeading-7" data-parent="#accordion">
                    <div class="card-body">
                        <p>Zajęcia trwają zwykle 2,5 godziny.</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="faqHeading-8">
                    <div class="mb-0">
                        <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-8" data-aria-expanded="false" data-aria-controls="faqCollapse-8">
                            <span class="badge">8</span> Z czego są prowadzone kursy?
                        </h5>
                    </div>
                </div>
                <div id="faqCollapse-8" class="collapse" aria-labelledby="faqHeading-8" data-parent="#accordion">
                    <div class="card-body">
                        <p>Kursy prowadzimy głównie z matematyki, natomiast mogą pojawiać się kursy z przedsiębiorczości, fizyki, chemii, angielskiego, geografii oraz informatyki.</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="faqHeading-9">
                    <div class="mb-0">
                        <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-9" data-aria-expanded="false" data-aria-controls="faqCollapse-9">
                            <span class="badge">9</span> O co chodzi z ankietami?
                        </h5>
                    </div>
                </div>
                <div id="faqCollapse-9" class="collapse" aria-labelledby="faqHeading-9" data-parent="#accordion">
                    <div class="card-body">
                        <p>Zaraz po zajęciach możesz wypełnić ankietę oceniającą Twój poziom zadowolenia z kursu. Za każdą prawidłowo wypełnioną ankietę po kursie możesz otrzymać od 10 do 20 punktów. Ankiety znajdziesz w ,,Panel użytkownika’’ ->,,Ankiety’’.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
  </div>
</div>
<br><br><br><br>
</section>

@endsection

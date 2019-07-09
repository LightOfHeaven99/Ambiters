@extends('layouts.app2')
@section('content')
<section class="page-section" id="contact">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading text-uppercase">Skontaktuj się!</h2>
        <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <form method="post" action="{{route('email.contact')}}">
          {{ csrf_field() }}
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <input class="form-control" name="name" type="text" placeholder="Imię i nazwisko *" required="required" data-validation-required-message="Proszę wpisać swoje imię.">
                <p class="help-block text-danger"></p>
              </div>
              <div class="form-group">
                <input class="form-control" name="email" type="email" placeholder="Email *" required="required" data-validation-required-message="Proszę wpisać swój adres e-mail.">
                <p class="help-block text-danger"></p>
              </div>
              <div class="form-group">
                <input class="form-control" name="phone" type="text" placeholder="Telefon *" required="required" data-validation-required-message="Proszę wpisać swój numer telefonu.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <input class="form-control" name="message" type="text" placeholder="Wiadomość... *" required="required" data-validation-required-message="Proszę wpisać wiadomość.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="col-lg-12 text-center">
              <div id="success"></div>
              <button  class="btn btn-primary btn-xl text-uppercase" type="submit">Wyślij</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

@endsection

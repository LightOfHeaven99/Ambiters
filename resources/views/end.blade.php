@extends('layouts.app2')
<br><br><br><br><br>
@section('content')


Dziękujemy za zakup!<br>
<br>
Zapisałeś się właśnie na kursy:
<br>
<br>
@if(count($data['registers'])>0)
  @foreach($data['registers']->all() as $register )
    - {{$register->course}}<br>
  @endforeach
@endif
<br>
Twoje zamówienie ma teraz status oczekujący.<br>
Wyślij należności na konto:<br>
Rafał Okrągły <br>
Adres: Ulica Ferdynanda Magellana 28/21, 51-505 Wrocław <br>
Tutył: {{$data['idTransaction']}} <br>
Numer konta: 33 1020 2137 0000 9102 0215 6255 <br>
Kwota: {{$data['total']}} złotych.<br>
<br><br>
Po dokonaniu przelewu Twoje zamówienie zostanie zatwierdzone w przeciągu 2/3 dni roboczych. <br><br>
Pozdrawiamy<br>
Zespół Ambiters

@endsection

<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scaleble-no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-mail</title>
</head>
<body>

Dziękujemy za zakup!<br>
<br>
Zapisałeś się właśnie na kursy:
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
Adres:  <br>
Numer konta: 33 1020 2137 0000 9102 0215 6255 <br>
Kwota: {{$data['total']}} złotych.<br>
<br><br>
Po dokonaniu przelewu Twoje zamówienie zostanie zatwierdzone w przeciągu 2/3 dni roboczych.
<br><br>
Pozdrawiamy<br>
Zespół Ambiters

</body>
</html>

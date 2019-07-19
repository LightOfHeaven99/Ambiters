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

Zaksięgowano wpłatę!<br>
<br>
Zatwierdzono właśnie zapis na kurs: <br>
- {{$data['register']->course}}<br>
Szkolenie odbędzie się dnia {{$data['course']->day}} o godzine {{substr($data['course']->time, 0 , 5)}}.<br>
Miejsce szkolenia: {{$data['course']->place}}.
<br><br>
Do zobaczenia!
<br><br>
Pozdrawiamy<br>
Zespół Ambiters

</body>
</html>

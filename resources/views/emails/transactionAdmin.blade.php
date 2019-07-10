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

Dokonano właśnie zakupu <br>
<br>
Użutkownik: {{$data['user']}}<br>
Zapisy na kursy: <br>
<br>
@if(count($data['registers'])>0)
  @foreach($data['registers']->all() as $register )
    - {{$register->course}}<br>
  @endforeach
@endif

<br>
Koszt: {{$data['total']}}<br>
<br><br>

</body>
</html>

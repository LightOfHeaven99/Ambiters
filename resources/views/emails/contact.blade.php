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
  Hej,
  <br>
  {{$data['message']}}
  <br>
  Nazywam się: {{$data['name']}}<br>
  Email: {{$data['email']}}<br>
  Telefon: {{$data['phone']}}<br>
</body>
</html>

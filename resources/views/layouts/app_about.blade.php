<!DOCTYPE html>

<!-- TAK NAPRAWDĘ TO JEST TO SAMO CO APP2 ALE CHCIAŁEM DODAĆ JESZCZE JEDEN CSS W HEAD I NIE WIEDZIAŁEM CZY SIĘ NIC NIE ZJEBIE, A
WIESZ, STRZEŻONEGO PAN BÓG NIE SKARA PIORUNEM W BAIŁY DZIEŃ TYLKO MANNA Z NIEBA CZY JAKOŚ TAK  -->



<html lang="pl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Ambiters</title>

        <!-- Fonts -->
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700|Playfair+Display:400,700,900|Roboto+Condensed:300,400&display=swap" rel="stylesheet">
        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Playfair+Display" />
        <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
        <link rel="stylesheet" href="css/ambiters.css" type="text/css">
        <link rel="stylesheet" href="css/about.css" type="text/css">
        <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
        <!--  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->

        <!-- Custom fonts for this template -->
        <link rel="stylesheet" href="css/fontawesome-free/css/all.min.css" type="text/css">


        <!-- JS -->
        <script src='js/jquery-3.1.1.min.js'></script>
        <script src='js/bootstrap.min.js'></script>
        <script src='js/ambiters.js'></script>
        <script src='js/bootstrap.bundle.min.js'></script>
        <script src='js/jquery.easing.js'></script>
        <script src='js/jquery.min.js'></script>
        <script src='js/about.js'></script>
        <!-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->


    </head>
    <body id="page-top">

          <!--Navigation-->

          <!-- Dobra elo, tu jest cały content. Navbar będzie do każdej strony taki sam. Nie będzie trzeba powielać kodu -->



        @include('layouts.message_error')
        @yield('content')


        <!-- Footer -->
	<!-- ./Footer -->
    </body>
</html>


      <!-- Page Content -->
      <!-- Bootsrapa i JQuery masz już podpięte. Wystarczy tylko działać. Wszystkie pliki źródłowe są w folderze public. Jest tego więcej ale to jeśli wolałbyś działać na
      sass a nie css. Wtedy modyfikuje sie pliki w resources. Polecam jednak bezposrednio do public. Da sie tez zrobic rozszerzenia co to naglowkow
      zeby byly na kazdej stronie bez powtarzania kodu ale to pewnie juz ogarniasz, albo dorobimy pozniej. Poki co to tu jest cala piaskownica
      xoxxoxoxoxo -->

      <!-- Update 2.0 : Tu trochę magii Laravela. Tak więc jak widać teraz na tej stronie znajduje się coś co się nazywa content.
      Jest to tak naprawdę rozszerzenie strony app znajdującej się w folderze layouts. Dzięki temu każda strona będzie
      mogła być rozszerzeniem app, w którym znajduje się navbar. Mniej powielania kodu. I logowanie powinno mi teraz fajnie
      działać, więc nooooo, myślałem, że nie będziemy tak robić na początku, ale dużo jednak daje. Tak naprawdę chodzi o to,
      że teraz jak będziesz pisać kod Pablito to lecisz z samym contentem, bez tego całego head, navbar i inne takie. Wszystko podpięte.-->


      @extends('layouts.app')

      @section('content')

      <div class ="container">
        <div class="getStarted">
          <p>Twoja przyszłość jest</p>
          <p>Naszym biznesem</p>
        </div>
        <div class="turtle">
          <img src="img/elo.png">
        </div>



      <!-- Bootstrap core JavaScript -->
      <script src="vendor/jquery/jquery.slim.min.js"></script>
      <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      @endsection

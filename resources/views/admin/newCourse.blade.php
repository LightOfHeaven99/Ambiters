  @extends('layouts.app2')
@section('content')
<section class="bg-light page-section">
<div class="card">
<div class="card-body">
<div class="container">
<div class="row">
  <div class="col">
  <div class="form_main">
    <h2 class="heading"><strong>Stwórz </strong> Kurs <span></span></h2>
  <form method="post" action="{{ route('form.create') }}" enctype="multipart/form-data">
    {{ csrf_field() }}
    <label for="Tytuł"><b>Nazwa kursu:</b></label>
    <input type="text" name="title" class="txt"></br>
    <label for="Podtytuł"><b>Podtytuł kursu:</b></label>
    <input type="text" name="subtitle" class="txt"></br>
    <label for="Opis"><b>Opis:</b></label>
    <input type="text" name="description" class="txt"></br>
    <label for="Prowadzący"><b>Prowadzący:</b></label>
    <input type="text" name="tutor" class="txt"></br>
    <label for="Adres"><b>Miejsce kursu:</b></label>
    <input type="text" name="place" class="txt"></br>
    <label for="Dzień"><b>Dzień kursu:</b></label>
    <input type="date" name="day" class="datee"></br>
    <label for="Dzień"><b>Godzina:</b></label>
    <input type="time" name="time" class="timee"></br>
    <label for="Time"><b>Czas Trwania:</b></label>
    <input type="text" name="timeEnd" class="txt"></br>
    <label for="price"><b>Cena:</b></label>
    <input type="text" name="price" class="txt"></br>
    <label for="points"><b>Punkty:</b></label>
    <input type="text" name="points" class="txt" value="0"></br>
    <label for="slots"><b>Ilość miejsc:</b></label>
    <input type="text" name="slots" class="txt"></br>
    <label for="toLearn1"><b>Nauczysz się (1):</b></label>
    <input type="text" name="toLearn1" class="txt"></br>
    <label for="toLearn2"><b>Nauczysz się (2):</b></label>
    <input type="text" name="toLearn2" class="txt"></br>
    <label for="toLearn3"><b>Nauczysz się (3):</b></label>
    <input type="text" name="toLearn3" class="txt"></br>
    <label for="toLearn4"><b>Nauczysz się (4):</b></label>
    <input type="text" name="toLearn4" class="txt"></br>
    <label for="toLearn5"><b>Nauczysz się (5):</b></label>
    <input type="text" name="toLearn5" class="txt"></br>
    <label for="image"><b>Wybierz zdjęcie</b></label></br>
    <select name="image">
      <option value="liczbyRzeczywiste.jpg"> Liczby Rzeczywiste</option>
      <option value="funkcjaKwadratowa.jpg"> Funkcja Kwadratowa</option>
      <option value="wyrazeniaAlgebraiczne.jpg"> Wyrażenia Algebraiczne</option>
      <option value="funkcjaLiniowa.jpg"> Funkcja Liniowa</option>
      <option value="funkcjaWymierna.jpg"> Funkcja Wymierna</option>
      <option value="ciagi.jpg"> Ciągi</option>
      <option value="funckjaLog.jpg"> Funkcje Logartymiczne i Wykładowe</option>
      <option value="Algebra1.jpg"> Algebra 1</option>
      <option value="Algebra2.jpg"> Algebra 2</option>
      <option value="Analiza1.jpg"> Analiza 1</option>
      <option value="Analiza2.jpg"> Analiza 2</option>
      <option value="Planimetria.jpg"> Planimetria</option>
      <option value="GeometriaAnalityczna.jpg"> Geometria Analityczna</option>
      <option value="prawdopodobienstwo.jpg"> Prawdopodobieństwo</option>
      <option value="sterometria.jpg"> Starometria</option>
      <option value="trygonometria.jpg"> Trygonometria</option>
      <option value="wielomiany.jpg"> Wielomiany</option>
      <option value="Funkcja.jpg"> Funkcja</option>
      <option value="Statystyka.jpg"> Statystyka</option>

    </select><br>
    <label for="type"><b>Wybierz typ zajęć</b></label></br>
    <select name="type">
      <option value="matematyka"> Matematyka </option>
      <option value="fizyka"> Fizyka </option>
      <option value="angielski"> Język angielski </option>
      <option value="przedsiebiorczosc"> Przedsiębiorczość </option>
      <option value="szkolenia zewnetrzne"> Szkolenia zewnętrzne </option>
      <option value="biologia"> Biologia </option>
      <option value="chemia"> Chemia </option>
      <option value="studia"> Studia </option>
    </select>
    <div class="col-sm text-center">
    <button class="btn btn-primary" type="submit">Utwórz Kurs</button>
  </div>
  </form>
  <br><br>
</div>
</div>
</div>
</div>
</div>
</div>
</section>

<style>
form_main {
    width: 100%;
}
.form_main h2 {
    font-family: roboto;
    font-size: 30px;
    font-weight: 300;
    margin-bottom: 15px;
    margin-top: 20px;
    text-transform: uppercase;
    text-align: center;
}
.heading {
    border-bottom: 1px solid #fcab0e;
    padding-bottom: 9px;
    position: relative;
}
.heading span {
    background: #9e6600 none repeat scroll 0 0;
    bottom: -2px;
    height: 3px;
    left: 0;
    position: absolute;
    width: 75px;
}
.form {
    border-radius: 7px;
    padding: 6px;
}
.txt[type="text"] {
    border: 1px solid #ccc;
    margin: 10px 0;
    padding: 10px 0 10px 5px;
    width: 100%;
}
.datee[type="date"] {
    border: 1px solid #ccc;
    margin: 10px 0;
    padding: 10px 0 10px 5px;
    width: 100%;
}
.timee[type="time"] {
    border: 1px solid #ccc;
    margin: 10px 0;
    padding: 10px 0 10px 5px;
    width: 100%;
}
.txt_3[type="text"] {
    margin: 10px 0 0;
    padding: 10px 0 10px 5px;
    width: 100%;
}
.txt2[type="submit"] {
    background: #242424 none repeat scroll 0 0;
    border: 1px solid #4f5c04;
    border-radius: 25px;
    color: #fff;
    font-size: 16px;
    font-style: normal;
    line-height: 35px;
    margin: 10px 0;
    padding: 0;
    text-transform: uppercase;
    width: 30%;
}
.txt2:hover {
    background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
    color: #5793ef;
    transition: all 0.5s ease 0s;
}
</style>


@endsection

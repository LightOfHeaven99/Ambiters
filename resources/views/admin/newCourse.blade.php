  @extends('layouts.app2')
@section('content')
</br></br></br>
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
    <label for="Opis"><b>Opis:</b></label>
    <input type="text" name="description" class="txt"></br>
    <label for="Adres"><b>Miejsce kursu:</b></label>
    <input type="text" name="place" class="txt"></br>
    <label for="Dzień"><b>Dzień kursu:</b></label>
    <input type="date" name="day" class="datee"></br>
    <label for="Dzień"><b>Godzina:</b></label>
    <input type="time" name="time" class="timee"></br>
    <label for="price"><b>Cena:</b></label>
    <input type="text" name="price" class="txt"></br>
    <label for="points"><b>Punkty:</b></label>
    <input type="text" name="points" class="txt"></br>
    <label for="slots"><b>Ilość miejsc:</b></label>
    <input type="text" name="slots" class="txt"></br>
    <label for="image"><b>Zdjęcie - max: 2MB - wymiary: 600x600</b></label></br>
    <input type="file" name="image" ></br><br><br>
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

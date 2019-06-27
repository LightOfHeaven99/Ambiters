  @extends('layouts.app2')
@section('content')
</br></br></br></br></br></br>
  <form method="post" action="{{ route('form.create') }}">
    {{ csrf_field() }}
    <label for="Tytuł">Nazwa kursu</label>
    <input type="text" name="title"></br>
    <label for="Opis">Opis</label>
    <input type="text" name="description"></br>
    <label for="Adres">Miejsce kursu</label>
    <input type="text" name="place"></br>
    <label for="Dzień">Dzień kursu</label>
    <input type="date" name="day"></br>
    <label for="Dzień">Godzina</label>
    <input type="time" name="time"></br>
    <label for="price">Cena</label>
    <input type="text" name="price"></br>
    <label for="points">Punkty</label>
    <input type="text" name="points"></br>
    <button type="submit">Utwórz </button>
  </form>


@endsection

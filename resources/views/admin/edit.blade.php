@extends('layouts.app2')
@section('content')
</br></br></br></br></br></br></br>
<form method="post" action="{{route('form.update')}}">
  {{ csrf_field() }}
  <input type="hidden" name="id" value="{{$course->id}}">
  <label for="Tytuł">Nazwa kursu</label>
  <input type="text" name="title" value="{{$course->title}}"></br>
  <label for="Opis">Opis</label>
  <input type="text" name="description" value="{{$course->description}}"></br>
  <label for="Adres">Miejsce kursu</label>
  <input type="text" name="place" value="{{$course->place}}"></br>
  <label for="Dzień">Dzień kursu</label>
  <input type="date" name="day" value="{{$course->day}}"></br>
  <label for="Dzień">Godzina</label>
  <input type="time" name="time" value="{{$course->time}}"></br>
  <label for="price">Cena</label>
  <input type="text" name="price" value="{{$course->price}}"></br>
  <label for="points">Punkty</label>
  <input type="text" name="points" value="{{$course->points}}"></br>
  <label for="discount">Zniżka</label>
  <input type="text" name="discount" value="{{$course->discount}}"></br>
  <button type="submit">Zaktualizuj </button>
</form>

@endsection

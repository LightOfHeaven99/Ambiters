@extends('layouts.app')
@section('content')

  <form method="post" action="{{ route('form.create') }}">
    {{ csrf_field() }}
    <label for="title">Nazwa kursu</label>
    <input type="text" name="title"></br>
    <label for="prize">Nazwa kursu</label>
    <input type="text" name="prize"></br>
    <button type="submit">Koniec </button>
  </form>


@endsection

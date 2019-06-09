@extends('layouts.app')
@section('content')
</br></br></br></br></br></br></br>
<form method="post" action="{{route('form.update')}}">
  {{ csrf_field() }}
  <input type="hidden" name="id" value="{{$course->id}}"
  <label for="title">Nazwa kursu</label>
  <input type="text" name="title"></br>
  <label for="prize">Nazwa kursu</label>
  <input type="text" name="prize"></br>
  <button type="submit">Utwórz </button>
</form>

@endsection

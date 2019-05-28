@extends('layouts.app')
@section('content')
<div class="container">
</br></br>
  <form method="post" action="{{ route('form.create') }}">
    {{ csrf_field() }}
    <label for="title">Nazwa kursu</label>
    <input type="text" name="title"></br>
    <label for="prize">Nazwa kursu</label>
    <input type="text" name="prize"></br>
    <button type="submit">Utwórz </button>
  </form>

  @if(count($courses)>0)
     @foreach($courses->all() as $course)
        <div class="card">
          <div class="card-body">
            {{$course->title}} ---> {{$course->prize}}
          </div>
        </div>
     @endforeach
  @endif
</div>

@endsection

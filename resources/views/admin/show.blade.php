@extends('layouts.app2')

@section('content')
  <div class ="contianer">
    <div class="card">
      <div class="card-body">
      <h2>{{$course->title}}</h2></br>
      <h4>ID:   {{$course->id}}</h4></br>
      <h4>Zapisanych osób:   {{$course->registered}}/{{$course->slots}}</h4></br>
      <h4>Opis:   {{$course->description}}</h4></br>
      <h4>Miejsce:   {{$course->place}}</h4></br>
      <h4>Dzień:   {{$course->day}}</h4></br>
      <h4>Czas:   {{$course->time}}</h4></br>
      <h4>Cena:   {{$course->price}}</h4></br>
      <h4>Punkty:   {{$course->points}}</h4></br>
      <h4>Zniżka:   {{$course->discount}}</h4></br>

      <!--lista ziomków co się zapisała na kurs -->
      @if(count($registers))
        @foreach($registers->all() as $register)
          {{$register->user}} -------   {{$register->status}} --------- {{$register->timeStamps}}
          <form method="post" action="{{route('register.accept',[$course->id])}}">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{$register->id}}">
            <input type="hidden" name="courseID" value="{{$course->id}}">
            <input type="hidden" name="price" value="{{$course->price}}">
            <button class="btn btn-primary" type="submit">POTWIERDZ</button>
          </form>
          </br>
        @endforeach
      @endif
  </div>
</div>
</div>



@endsection

@extends('layouts.app')

@section('content')
  <div class ="contianer">
      <h2>{{$course->title}}</h2></br>
      <h4>ID:   {{$course->id}}</h4></br>
      <h4>Opis:   {{$course->description}}</h4></br>
      <h4>Miejsce:   {{$course->place}}</h4></br>
      <h4>Dzień:   {{$course->day}}</h4></br>
      <h4>Czas:   {{$course->time}}</h4></br>
      <h4>Cena:   {{$course->price}}</h4></br>
      <h4>Punkty:   {{$course->points}}</h4></br>
      <h4>Zniżka:   {{$course->discount}}</h4></br>

      <!lista ziomków co się zapisała na kurs ->
      @if(count($registers))
        @foreach($registers->all() as $register)
          {{$register->user}} -------   {{$register->status}} --------- {{$register->timeStamps}}</br>
        @endforeach
      @endif


  </div>



@endsection

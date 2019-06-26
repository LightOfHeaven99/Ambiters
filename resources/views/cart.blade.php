@extends('layouts.app')
@section('content')

No ELO YO {{$user->name}}
@if(count($registers))
  @foreach($registers->all() as $register)
    {{$register->course}} -------   {{$register->price}}
  @endforeach
@endif
@endsection

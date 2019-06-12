@extends('layouts.app')
@section('content')

  <div class="content">
  </br></br></br></br></br></br></br>
    <h2>Nazwa: {{$user->name}}</h2>
    <h4>Email: {{$user->email}}</h4>
    <h4>Punkty:
    @if($user->points>0)
      {{$user->points}}
    @else
      0
    @endif
    </h4>
  </div>

  <form method="get" action="{{route('user.delete')}}">
    {{ csrf_field() }}
    <input type="hidden" name="id" value="{{$user->id}}">
    <button type="submit">USUN</button>
  </form>
@endsection

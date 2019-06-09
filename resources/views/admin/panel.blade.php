@extends('layouts.app')
@section('content')
<div class="container">
</br></br></br></br></br></br>
<a href="/Ambiters/public/admin/newCourse">
  <div class="btn">
    DODAJ KURS
  </div>
</a>
  @if(count($courses)>0)
     @foreach($courses->all() as $course)
        <div class="card">
          <div class="card-body">
            {{$course->title}} ---> {{$course->prize}}
          </div>
          <div class ="button" style="text-align:left">
            <a class="btn btn-default" href="/Ambiters/public/admin/{{$course->id}}/edit">EDIT</a>
          </div>
        </div>
     @endforeach
  @endif
</div>

@endsection

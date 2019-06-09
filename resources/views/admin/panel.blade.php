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
            {{$course->title}} ---> {{$course->time}} {{$course->day}}
          </div>
          <div class ="button" style="text-align:left">
            <a class="btn btn-default" href="/Ambiters/public/admin/{{$course->id}}/edit">EDIT</a>
          </div>
          <form method="get" action="{{route('form.delete')}}">
            <input type="hidden" name="id" value="{{$course->id}}">
            <button type="submit">USUN</button>
          </form>
        </div>
     @endforeach
  @endif
</div>
<<<<<<< HEAD
if()
=======
>>>>>>> e295011f011e4899c3aec71cfe44bb62cb27abab

@endsection

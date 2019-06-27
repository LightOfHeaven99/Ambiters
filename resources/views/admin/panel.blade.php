@extends('layouts.app2')
@section('content')
<div class="container">
</br></br></br></br></br></br>
<a href="admin.newCourse">
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
          <form method="get" action="{{route('form.edit', [$course->id])}}">
            <input type="hidden" name="id" value="{{$course->id}}">
            <button type="submit">EDIT</button>
          </form>
          <form method="get" action="{{route('form.show', [$course->id])}}">
            <input type="hidden" name="id" value="{{$course->id}}">
            <button type="submit">SHOW</button>
          </form>
          <form method="get" action="{{route('form.delete')}}">
            <input type="hidden" name="id" value="{{$course->id}}">
            <button type="submit">USUN</button>
          </form>


          <!- tu jest zapis. Trzeba będzie przekopiować i wklejć w miejsce gdzie ma być ->

          @guest
          @else
          <form method="post" action="{{route('register.create')}}">
            {{ csrf_field() }}
            <input type="hidden" name="UserID" value="{{Auth::user()->id}}">
            <input type="hidden" name="UserName" value="{{Auth::user()->name}}">
            <input type="hidden" name="CourseID" value="{{$course->id}}">
            <input type="hidden" name="CourseName" value="{{$course->title}}">
            <button type="submit">Zapisz się</button>
          </form>
          @endguest


        </div>
     @endforeach
  @endif
</div>

@endsection

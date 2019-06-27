@extends('layouts.app2')
@section('content')
<div class="container">
</br></br></br></br></br></br>
<a href="admin.newCourse">
  <div class="admin-btn">
    <div class="btn btn-primary btn-xl">
      DODAJ KURS
    </div>
  </div>
</a>
<br>
  @if(count($courses)>0)
     @foreach($courses->all() as $course)
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-sm text-center">
              <b>Nazwa szkolenia:</b> {{$course->title}}<br>
            </div>
            <div class="col-sm text-center">
            <b>Data:</b> {{$course->time}} {{$course->day}} <!-- Tutaj data szkolenia -->
          </div>
          <div class="col-sm text-center">
          <b>Ilość zapisanych osób:</b> {{$course->time}} {{$course->day}} <!-- Tutaj ilość zapisanych ludzi na szkolenie -->
         </div>
        </div>
      </div>
              <div class="admin-options">
          <div class="row">
            <div class="col-sm text-center">
          <form method="post" action="{{route('form.edit', [$course->id])}}">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{$course->id}}">
            <button class="btn btn-primary" type="submit">EDYTUJ</button>
          </form>
        </div>
        <div class="col-sm text-center">
          <form method="post" action="{{route('form.show', [$course->id])}}">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{$course->id}}">
            <button class="btn btn-primary" type="submit">PODGLĄD</button>
          </form>
        </div>
        <div class="col-sm text-center">
          <form method="get" action="{{route('form.delete')}}">
            <input type="hidden" name="id" value="{{$course->id}}">
            <button class="btn btn-primary" type="submit">USUŃ</button>
          </form>
          <br>
          </div>
        </div>
      </div>



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
<br>

@endsection

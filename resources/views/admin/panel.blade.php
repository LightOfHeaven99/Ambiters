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
            <b>Data:</b> {{substr($course->time,0,5)}} {{$course->day}} <!-- Tutaj data szkolenia -->
          </div>
          <div class="col-sm text-center">
          <b>Ilość zapisanych osób:</b> {{$course->registered}}/{{$course->slots}} <!-- Tutaj ilość zapisanych ludzi na szkolenie -->
         </div>
        </div>
      </div>
              <div class="admin-options">
          <div class="row">
            <div class="col-sm text-center">
          <form method="get" action="{{route('form.edit', [$course->id])}}">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{$course->id}}">
            <button class="btn btn-primary" type="submit">EDYTUJ</button>
          </form>
        </div>
        <div class="col-sm text-center">
          <form method="get" action="{{route('form.show', [$course->id])}}">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{$course->id}}">
            <button class="btn btn-primary" type="submit">PODGLĄD</button>
          </form>
        </div>
        <div class="col-sm text-center">
          <form method="get" action="{{route('form.delete')}}">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{$course->id}}">
            <button class="btn btn-primary" type="submit">USUŃ</button>
          </form>
          <br>
          </div>
        </div>
      </div>
        </div>
     @endforeach
  @endif
</div>
<br>

@endsection

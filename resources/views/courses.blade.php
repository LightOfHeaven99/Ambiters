  @extends('layouts.app2')
@section('content')
</br></br></br></br></br></br>

  <div class="container">
    @if(count($courses))
      @foreach($courses->all() as $course)
        <div class="row">
          <div class="col-xs-4">
            <img style="width:300px;" src="img/courses/{{$course->img}}" class="img-fluid" />
          </div>
          <div class="col-xs-4">
          </div>
            {{$course->description}}
          </br>
          Zapisanych osób: {{$course->registered}}/{{$course->slots}}
          </div>
          <div class="col-xs-2" >
            @if($course->registered >= $course->slots )
              BRAK MIEJSC
            @else
              @guest
              @else
              <form method="post" action="{{route('register.create')}}">
                {{ csrf_field() }}
                <input type="hidden" name="UserID" value="{{Auth::user()->id}}">
                <input type="hidden" name="UserName" value="{{Auth::user()->name}}">
                <input type="hidden" name="CourseID" value="{{$course->id}}">
                <input type="hidden" name="CourseName" value="{{$course->title}}">
                <input type="hidden" name="price" value="{{$course->price}}">
                <button type="submit">Zapisz się</button>
              </form>
              @endguest
            @endif
          </div>
        </div>
      @endforeach
    @endif
  </div>
@endsection

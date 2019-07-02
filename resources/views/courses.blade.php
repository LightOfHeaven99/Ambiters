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
                <button class="btn btn-primary" type="submit">Zapisz się</button>
              </form>
              @endguest
            @endif
          </div>
        </div>
      @endforeach
    @endif
  </div>



  <style>
  body{
      background-color: #f2f2f2;
  }
  .emp-profile{
      padding: 3%;
      margin-top: 3%;
      margin-bottom: 3%;
      border-radius: 0.5rem;
      background: #fff;
  }
  .profile-head h5{
      color: #333;
  }
  .profile-head h6{
      color: #0062cc;
  }
  .profile-edit-btn{
      border: none;
      border-radius: 1.5rem;
      width: 70%;
      padding: 2%;
      font-weight: 600;
      color: #6c757d;
      cursor: pointer;
  }
  .proile-rating{
      font-size: 12px;
      color: #818182;
      margin-top: 5%;
  }
  .proile-rating span{
      color: #495057;
      font-size: 15px;
      font-weight: 600;
  }
  .profile-head .nav-tabs{
      margin-bottom:5%;
  }
  .profile-head .nav-tabs .nav-link{
      font-weight:600;
      border: none;
  }
  .profile-head .nav-tabs .nav-link.active{
      border: none;
      border-bottom:2px solid #0062cc;
  }
  .profile-work{
      padding: 14%;
      margin-top: -15%;
  }
  .profile-work p{
      font-size: 12px;
      color: #818182;
      font-weight: 600;
      margin-top: 10%;
  }
  .profile-work a{
      text-decoration: none;
      color: #495057;
      font-weight: 600;
      font-size: 14px;
  }
  .profile-work ul{
      list-style: none;
  }
  .profile-tab label{
      font-weight: 600;
  }
  .profile-tab p{
      font-weight: 600;
      color: #0062cc;
  }
  </style>
@endsection

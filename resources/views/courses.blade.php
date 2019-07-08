  @extends('layouts.app2')
@section('content')
</br></br></br></br>
<div class="container">
  <h1 class="text-center text-uppercase">Dostępne kursy</h1>
  <br><br>
    @if(count($courses))
      @foreach($courses->all() as $course)
        <div class="row justify-content-center">
          <div class="col-md">
            <img style="width:300px;" src="img/courses/{{$course->img}}" class="img-fluid rounded mb-3 mb-md-0" />
          </div>
          <div class="col-md">
            <b>{{$course->title}}</b>
            <br>
            {{$course->description}}
          </div>
          <div class="col-md">
            <b>Data:</b>
            <br>
            {{$course->day}}
            <br>
            {{$course->time}}
          </div>
          <div class="col-md">
            <b>Cena:</b>
            <br>
            {{$course->price}}
          </div>
          <!-- <div class="col-md">
          <b>Zapisanych osób:</b>
          <br>
          {{$course->registered}}/{{$course->slots}}
        </div> -->
          <div class="col-md" >
            @if($course->registered >= $course->slots )
              BRAK MIEJSC
            </div>
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
                <button class="btn btn-primary" type="submit">Dodaj do koszyka</button>
              </form>
              @endguest
            @endif
          </div><br><br><br>
        </div>
      @endforeach
    @endif



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

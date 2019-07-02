@extends('layouts.app2')

@section('content')
<br><br><br>
  <div class="container emp-profile">
            <form method="post">
                <div class="row">
                    <div class="col-md">
                        <div class="profile-head">
                                    <h5>
                                      Podgląd szkolenia
                                    </h5>
                                    <br>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Informacje</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Uczestnicy</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Nazwa szkolenia</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$course->title}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>ID</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$course->id}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Zapisane osoby</label>
                                            </div>
                                            <div class="col-md-6">
                                              <p>{{$course->registered}}/{{$course->slots}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Opis</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$course->description}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Miejsce</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$course->place}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Data</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$course->day}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Czas</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$course->time}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Cena</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$course->price}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Punkty</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$course->points}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Zniżka</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$course->discount}}</p>
                                            </div>
                                        </div>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                              @if(count($registers))
                                                @foreach($registers->all() as $register)
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label>Uczestnik</label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <p>{{$register->user}}</p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label>Status</label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <p>{{$register->status}}</p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label>Ilość szkoleń(?)</label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <p>{{$register->timeStamps}}</p>
                                                    </div>
                                                </div>
                                                  <form method="post" action="{{route('register.accept',[$course->id])}}">
                                                    {{ csrf_field() }}
                                                    <input type="hidden" name="id" value="{{$register->id}}">
                                                    <input type="hidden" name="courseID" value="{{$course->id}}">
                                                    <input type="hidden" name="price" value="{{$course->price}}">
                                                    <button class="btn btn-primary" type="submit">POTWIERDŹ</button>
                                                  </form>
                                                </br><br><br>
                                                @endforeach
                                              @endif
                                            </div>
                                      </div>
                                    </div>
                                  </div>
                                </form>
                              </div>
                            </div>
                          </section>


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

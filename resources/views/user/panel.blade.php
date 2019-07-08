@extends('layouts.app2')
@section('content')
<br><br><br>
  <div class="container emp-profile">
            <form method="post">
                <div class="row">
                    <div class="col-md">
                        <div class="profile-head">
                                    <h5>
                                      Witaj w panelu użytkownika!
                                    </h5>
                                    <br>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="info-tab" data-toggle="tab" href="#info" role="tab" aria-controls="home" aria-selected="true">Informacje</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="szkolenia-tab" data-toggle="tab" href="#szkolenia" role="tab" aria-controls="profile" aria-selected="false">Szkolenia</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="ankiety-tab" data-toggle="tab" href="#ankiety" role="tab" aria-controls="profile" aria-selected="false">Ankiety</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="punkty-tab" data-toggle="tab" href="#punkty" role="tab" aria-controls="profile" aria-selected="false">Wymiana punktów</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="delete-tab" data-toggle="tab" href="#delete" role="tab" aria-controls="profile" aria-selected="false">Usuń konto</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <br>
                </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="info" role="tabpanel" aria-labelledby="info-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Imię i Nazwisko</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$user->name}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Adres E-mail</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$user->email}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Punkty</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>@if($user->points>0)
                                                  {{$user->points}}
                                                @else
                                                  0
                                                @endif</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Zniżka przy kolejnym zakupie</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>@if($user->discount>0)
                                                  {{$user->discount}}
                                                @else
                                                  0
                                                @endif</p>
                                            </div>
                                        </div>
                            </div>
                            <div class="tab-pane fade" id="szkolenia" role="tabpanel" aria-labelledby="szkolenia-tab">
                                        @if(count($registers)>0)
                                          <div class="ukryj">
                                            {{$index =0}}
                                          </div>
                                          @foreach($registers->all() as $register)
                                            <div class="ukryj">
                                              {{$index = $index+1}}
                                              {{$course = App\Course::find($register->courseID)}}
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>{{$register->course}}</label>
                                                </div>
                                                <div class="col-md-2">
                                                    <p>{{$course->day}}</p>
                                                </div>
                                                <div class="col-md-2">
                                                    <p>{{$course->time}}</p>
                                                </div>
                                                <div class="col-md-2">
                                                    <p>{{$register->status}}</p>
                                                </div>
                                            </div>
                                          @endforeach
                                        @endif
                              </div>

                                      <div class="tab-pane fade" id="ankiety" role="tabpanel" aria-labelledby="ankiety-tab">
                                                  <div class="row">
                                                      <div class="col-md-6">
                                                          <label>ANKIETA#1</label>
                                                      </div>
                                                      <div class="col-md-6">
                                                          <p>Ankieta</p>
                                                      </div>
                                                  </div>
                                                  <div class="row">
                                                      <div class="col-md-6">
                                                          <label>ANKIETA #2</label>
                                                      </div>
                                                      <div class="col-md-6">
                                                          <p>Ankieta</p>
                                                      </div>
                                                  </div>
                                                </div>


                                                <div class="tab-pane fade" id="punkty" role="tabpanel" aria-labelledby="punkty-tab">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <label>RABAT 30 ZŁOTYCH</label>
                                                                </div>
                                                                <div class="col-md-6">
                                                                  @if($user->points>299)
                                                                    <form method="post" action="{{route('user.discount')}}">
                                                                      {{ csrf_field() }}
                                                                      <input type="hidden" name="discount" value="30">
                                                                      <input type="hidden" name="rPoints" value="300">
                                                                      <button class="btn btn-primary" type="submit">300 PUNKTÓW</button>
                                                                    </form>
                                                                  @else
                                                                    <button class="btn btn-primary" type="">300 PUNKTÓW</button>
                                                                  @endif
                                                                </div>
                                                            </div>
                                                            <br>

                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <label>RABAT 40 ZŁOTYCH</label>
                                                                </div>
                                                                <div class="col-md-6">
                                                                  @if($user->points>349)
                                                                    <form method="post" action="{{route('user.discount')}}">
                                                                      {{ csrf_field() }}
                                                                      <input type="hidden" name="discount" value="40">
                                                                      <input type="hidden" name="rPoints" value="350">
                                                                      <button class="btn btn-primary" type="submit">350 PUNKTÓW</button>
                                                                    </form>
                                                                  @else
                                                                    <button class="btn btn-primary" type="">350 PUNKTÓW</button>
                                                                  @endif
                                                                </div>
                                                            </div>
                                                            <br>

                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <label>RABAT 60 ZŁOTYCH</label>
                                                                </div>
                                                                <div class="col-md-6">
                                                                  @if($user->points>499)
                                                                    <form method="post" action="{{route('user.discount')}}">
                                                                      {{ csrf_field() }}
                                                                      <input type="hidden" name="discount" value="50">
                                                                      <input type="hidden" name="rPoints" value="400">
                                                                      <button class="btn btn-primary" type="submit">500 PUNKTÓW</button>
                                                                    </form>
                                                                  @else
                                                                    <button class="btn btn-primary" type="">500 PUNKTÓW</button>
                                                                  @endif
                                                                </div>
                                                            </div>

                                              </div>
                                              <div class="tab-pane fade" id="delete" role="tabpanel" aria-labelledby="delete-tab">
                                                          <div class="row">
                                              <div class="col-md-2">
                                                <form method="get" action="{{route('user.delete')}}">
                                                  {{ csrf_field() }}
                                                  <input type="hidden" name="id" value="{{$user->id}}">
                                                  <button class="btn btn-primary" type="submit">USUŃ KONTO</button>
                                                </form>
                                              </div>
                                            </div>
                                          </div>
                                    </div>
                                  </div>
                                </form>
                              </div>

<style>
body{
    background-color: #f2f2f2;
}

.ukryj{
  visibility: hidden;
  z-index: 30;
  position: fixed;
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

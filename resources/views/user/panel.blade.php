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
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                      <button class="btn btn-primary" type="submit">ZAMIEŃ PUNKTY</button>
                    </div>
                    <br>
                    <div class="col-md-2">
                      <form method="get" action="{{route('user.delete')}}">
                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{$user->id}}">
                        <button class="btn btn-primary" type="submit">USUŃ KONTO</button>
                      </form>
                    </div>
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
                                                <label>ID</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$user->id}}</p>
                                            </div>
                                        </div>
                            </div>
                            <div class="tab-pane fade" id="szkolenia" role="tabpanel" aria-labelledby="szkolenia-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>SZKOLENIE#1</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Zarządzanie</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>SZKOLENIE #2</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Organizacja</p>
                                            </div>
                                        </div>
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
                                    </div>
                                  </div>
                                </form>
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

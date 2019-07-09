
@if(count($errors)>0)
    <br><br><br><br><br>
    @foreach($errors->all() as $error)
        <div class="alert alert-danger">
            {{$error}}
        </div>
    @endforeach
@endif

@if(session('succes'))
    <br><br><br><br><br>
    <div class="alert alert-succes">
        {{session('succes')}}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger">
        {{session(error)}}
    </div>
@endif

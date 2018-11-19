@extends('layouts.app')

@section('content')

<style>
.imagen{
    position:absolute;
    width:100%;
    height:100%;
    margin-top:-20px;
}
.panel{
    opacity: 0.6;
    text-align:center;
}

.user{
    height:30%;
    width:30%;
    margin-bottom:10px;
}
.title{
    background: teal;
    color:white;
    padding: 10px 0px;
    font-weight: bold;
}
.icons{
    font-size:20px;
    color:gray;
}
</style>

<img class="imagen" src="https://img.okeinfo.net/content/2017/02/25/194/1628150/desainer-harus-punya-attitude-yang-baik-kalau-ingin-go-internasional-vt93cXXNGm.jpg" alt="">
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="title">ACCESO AL SISTEMA</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}


                        <img class="user" src="https://png2.kisspng.com/20180508/ozq/kisspng-user-computer-icons-system-chinese-wind-title-column-5af1427fd3ab48.378455571525760639867.png" alt="">
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label"><i class="fa icons fa-user" aria-hidden="true"></i>
                            Correo Electronico</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label"><i class="fa icons fa-lock" aria-hidden="true"></i>
                            Contraseña</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Recordar
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-sign-in"></i> Acceder
                                </button>

                                <a class="btn btn-link" href="{{ url('/password/reset') }}">Olvidaste tu contraseña?</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.app')
@section('body-class', 'signup-page')
@section('content')
<div class="header header-filter" style="background-image: url('https://i.ytimg.com/vi/rYdo8zwY0HM/maxresdefault.jpg'); background-size: cover; background-position: top center;">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
                <div class="card card-signup">
                     <form class="form" method="POST" action="{{ route('register') }}">

                        @csrf
                        <div class="header header-primary text-center">
                            <h4>Registro de usuario</h4>
                        </div>
                        <p class="text-divider">Completa tus datos</p>
                        <div class="content">
                           <div class="input-group">
                            <span class="input-group-addon">
                                <i class="material-icons">face</i>
                                </span>
                                <input type="text" class="form-control" placeholder="Nombre..." name="name" value="{{ old('name') }}" required autofocus>
                            </div> 


                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">email</i>
                                </span>
                               
                                <input id="email" type="email" placeholder="Correo electrónico..." class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                            </div>

                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">lock_outline</i>
                                </span>
                                <input id="password" type="password" class="form-control" name="password" required placeholder="Contraseña..." />
                            </div>

                          
                             <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">lock_outline</i>
                                </span>
                                <input id="password" type="password" class="form-control" name="password_confirmation" required placeholder="Confirmar contraseña..." />
                            </div>   
                           
                        </div>
                        <div class="footer text-center">
                            <button type="submit" class="btn btn-simple btn-primary btn-lg">Confirmar registro</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @include('includes.footer')

</div>
@endsection

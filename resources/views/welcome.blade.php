@extends('layouts.app')
@section('body-class', 'landing-page')

@section('styles')
<style>
    .team .row .col-md-4{
        margin-bottom: 5em;
    }   
    .row {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display:         flex;
        flex-wrap: wrap;
    }
    .row > [class*='col-'] {
        display: flex;
        flex-direction: column;
    }
    

</style>
@endsection
@section('content')
 <div class="header header-filter" style="background-image: url('https://i.ytimg.com/vi/rYdo8zwY0HM/maxresdefault.jpg');">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="title">Papeleria y Regalos Sandy</h1>
                        <h4>Los mejores prductos, ahora más cerca de ti...</h4>
                        <br />
                        <!-- <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" class="btn btn-danger btn-raised btn-lg">
                            <i class="fa fa-play"></i> ¿Cómo funciona?
                        </a> -->
                    </div>
                </div>
            </div>
        </div>

        <div class="main main-raised">
            <div class="container">
                  <div class="container">
                <div class="section text-center section-landing">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <h2 class="title">¿Quiénes somos?</h2>
                            <h5 class="description">Somos una empresa dedicada a la distribución y venta de productos básicos de papeleria, comprometidos a brindar un servicio impecable y los precios más bajos de la zona.</h5>
                        </div>
                    </div>

                    <div class="features">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="info">
                                    <div class="icon icon-primary">
                                        <i class="material-icons">chat</i>
                                    </div>
                                    <h4 class="info-title">Asistencia personalizada.</h4>
                                    <p>Atendemos rápidamente cualquier duda que tengas. ¡No estás solo!</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="info">
                                    <div class="icon icon-success">
                                        <i class="material-icons">verified_user</i>
                                    </div>
                                    <h4 class="info-title">Pago seguro</h4>
                                    <p>Todos los pedidos que realices están completamente protegidos y serán confirmados en un lapso máximo de 24 horas.</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="info">
                                    <div class="icon icon-danger">
                                        <i class="material-icons">fingerprint </i>
                                    </div>
                                    <h4 class="info-title">Información privada</h4>
                                    <p>Tu información está resguardada y nadie más tendrá acceso a tu cuenta.</p>
                                </div>
                            </div>

                <div class="section text-center">

                    <h2 class="title">Productos disponibles</h2>

                    <div class="team">
                        <div class="row">
                           @foreach($products as $product)
                            <div class="col-md-4">
                                <div class="card team-player">
                                    <img src="{{ $product->images()->first()->image }}" alt="Thumbnail Image" class="img-raised img-circle">
                                   <h4 class="title">
                                        <a href="{{ url('/products/'.$product->id) }}">{{ $product->name }}</a>
                                        <br>
                                        
                                   </h4>
                                    <p class="description">{{$product->description}}</p>
                                    
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="text-center">
                            {{ $products->links()}}
                        </div>
                    </div>

                </div>
			</div>

                <div class="section landing-section">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <h2 class="text-center title">¡Contáctanos!</h2>
                            <h4 class="text-center description">Si requieres asistencia personalizada, llena el siguiente formulario.</h4>
                            <form class="contact-form">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Ingresa tu nombre</label>
                                            <input type="email" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Ingresa tu correo electrónico</label>
                                            <input type="email" class="form-control" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group label-floating">
                                    <label class="control-label">Ingresa aquí tu mensaje</label>
                                    <textarea class="form-control" rows="4" required></textarea>
                                </div>

                                <div class="row">
                                    <div class="col-md-4 col-md-offset-4 text-center">
                                        <button class="btn btn-primary btn-raised" >
                                            ¡Enviar!
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>

        </div>

        @include('includes.footer')
@endsection

@extends('layouts.app')
@section('body-class', 'productos-page')
@section('content')


<div class="header header-filter" style="background-image: url('https://i.ytimg.com/vi/rYdo8zwY0HM/maxresdefault.jpg');"></div>

        <div class="main main-raised">
            <div class="container">
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


@endsection
@extends('layouts.app')

@section('title', 'Papeleria Sandy | Dashboard')
@section('body-class', 'product-page')
@section('content')
 <div class="header header-filter" style="background-image: url('http://www.papeleriamodelo.com/wp-content/uploads/2015/08/papeleria-online.jpg');">
         
        </div>

        <div class="main main-raised">
            <div class="container">
                 
                

                <div class="section">
                    <h2 class="title text-center">Dashboard</h2>
                                        @if (session('notification'))
                                            <div class="alert alert-success" role="alert">
                                                {{ session('notification') }}
                                            </div>
                                        @endif

                                       <ul class="nav nav-pills nav-pills-primary" role="tablist">
                                        <li class="active">
                                            <a href="#dashboard" role="tab" data-toggle="tab">
                                                <i class="material-icons">dashboard</i>
                                                Carrito de compras
                                            </a>
                                        </li>
                                        
                                        <!-- <li>
                                            <a href="#tasks" role="tab" data-toggle="tab">
                                                <i class="material-icons">list</i>
                                                Pedidos realizados
                                            </a>
                                        </li> -->
                                    </ul>
                                    <hr>
                                    <p>Tu carrito tiene {{ auth()->user()->cart->details->count()}} productos.</p>
                                    <table class="table">
                                   <thead>
                                        <tr>
                                            <th class="text-center">#</th>
                                            <th class="text-center">Nombre</th>
                                            <th class="text-left">Precio</th>
                                            <th>Cantidad</th>
                                            <th>SubTotal</th>
                                            <th >Opciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach(auth()->user()->cart->details as $detail)
                                        <tr>
                                            <td class="text-center">
                                                <img src="{{ $detail->product->images()->first()->image}}" height="90">

                                            </td>
                                            <td>
                                                <a href="{{ url('/products/'.$detail->product->id)}}"  target="_blank">{{ $detail->product->name}}

                                                </a>
                                            </td>
                                            <td class="text-left">$; {{ $detail->product->price}}</td>
                                            <td>{{$detail->quantity}}</td>
                                            <td>$ {{$detail->quantity * $detail->product->price }}</td>
                                            <td class="td-actions">
                                                
                                                <form method="post" action="{{url('/cart')}}">
                                                    {{ csrf_field() }}
                                                    {{ method_field('DELETE')}}
                                                    <input type="hidden" name="cart_detail_id" value="{{$detail->id}}">
                                                    <a href="{{ url('products/'.$detail->product->id) }}" target="_blank" type="button" rel="tooltip" title="Ver producto" class="btn btn-info btn-simple btn-xs">
                                                    <i class="fa fa-info"></i>
                                                    </a>
                                                    
                                                     <button  type="submit" rel="tooltip" title="Eliminar" class="btn btn-danger btn-simple btn-xs">
                                                    <i class="fa fa-times"></i>
                                                    </button>
                                                </form>
                                               
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                    <div class="text-center">
                        <form method="post" action="{{ url('/order') }}">
                            {{ csrf_field() }}
                                <button class="btn btn-success btn-round">
                                    <i class="material-icons">done</i> ¡Comprar ahora!
                                </button>


                        </form>
                        
                    </div>
                    
                                
                     
            </div>

        </div>
    </div>

@include('includes.footer')

@endsection






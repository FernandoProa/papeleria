@extends('layouts.app')
@section('body-class', 'product-page')
@section('content')
 <div class="header header-filter" style="background-image: url('https://i.ytimg.com/vi/rYdo8zwY0HM/maxresdefault.jpg');">
         
        </div>

        <div class="main main-raised">
            <div class="container">
                  <div class="container">
                

                <div class="section">
                    <h2 class="title" text-center>Registrar nuevo producto</h2>
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
               <form method="post" action="{{ url('/admin/products') }}">
                   {{ csrf_field()}}

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group label-floating">
                         <label class="control-label">Nombre del producto</label>
                            <input type="text" class="form-control" name="name" value="{{ old('name')}}" required>
                        </div>
                    </div>
                    <div class="col-sm-6">
                    <div class="form-group label-floating">
                    <label class="control-label">Precio del producto</label>
                    <input type="number" class="form-control" name="price" value="{{ old('price')}}" required>
                    </div>
                    </div>
                </div>
               

                <div class="form-group label-floating">
                    <label class="control-label">Descripción corta</label>
                    <input type="text" class="form-control" name="description" value="{{ old('description')}}" required>
                 </div>    
                 
                 <textarea class="form-control" placeholder="Descripción extensa del producto" rows="5" name="long_description" placeholder="Descripción extensa del producto">{{old('long_description')}}</textarea>
                <button class="btn btn-primary">Registrar producto</button>
               <a href="{{ url('/admin/products') }}" class="btn btn-default">Cancelar</a>
                </form>
                </div>

            </div>

        </div>

        @include('includes.footer')

@endsection

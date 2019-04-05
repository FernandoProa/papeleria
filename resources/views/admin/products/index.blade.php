@extends('layouts.app')
@section('title','Listado')
@section('body-class', 'product-page')
@section('content')
 <div class="header header-filter" style="background-image: url('https://www.elsoldetoluca.com.mx/finanzas/5pds0j-papeleria/ALTERNATES/LANDSCAPE_1140/papeler%C3%ADa');">
            
        </div>

        <div class="main main-raised">
            <div class="container">
                  <div class="container">
          

                <div class="section text-center">
                    <h2 class="title">Listado de productos</h2>

                    <div class="team">
                        <div class="row">
                            <a href="{{ url('/admin/products/create')}}"class="btn btn-primary btn-round">Nuevo producto</a>
                           <table class="table">
                                   <thead>
                                        <tr>
                                            <th class="text-center">#</th>
                                            <th class="col-md-2 text-center">Nombre</th>
                                            <th class="col-md-5 text-center">Descripción</th>
                                            <th class="text-center">Categoria</th>
                                            <th class="text-right">Precio</th>
                                            <th class="text-right">Opciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($products as $product)
                                        <tr>
                                            <td class="text-center">{{ $product->id}}</td>
                                            <td>{{ $product->name}}</td>
                                            <td>{{ $product->description}}</td>
                                            <td>{{ $product->category ? $product->category->name : 'General'}}</td>
                                            <td class="text-right">$ {{ $product->price}}</td>
                                            <td class="td-actions text-right">
                                                
                                                <form method="post" action="{{url('/admin/products/'.$product->id.'/delete')}}">
                                                    {{ csrf_field() }}
                                                    {{ method_field('DELETE') }}
                                                    <a type="button" rel="tooltip" title="Ver producto" class="btn btn-info btn-simple btn-xs">
                                                    <i class="fa fa-info"></i>
                                                    </a>
                                                    <a href="{{url('/admin/products/'.$product->id.'/edit')}}" rel="tooltip" title="Editar producto" class="btn btn-success btn-simple btn-xs">
                                                    <i class="fa fa-edit"></i>
                                                    </a>
                                                    <a  href="{{url('/admin/products/'.$product->id.'/images')}}" rel="tooltip" title="Imagenes del producto" class="btn btn-warning btn-simple btn-xs">
                                                    <i class="fa fa-image"></i>
                                                    </a>
                                                     <button type="submit" rel="tooltip" title="Eliminar" class="btn btn-danger btn-simple btn-xs">
                                                    <i class="fa fa-times"></i>
                                                    </button>
                                                </form>
                                               
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{ $products->links() }}
                        </div>
                    </div>

                </div>


              
            </div>

        </div>

      @include('includes.footer')

@endsection

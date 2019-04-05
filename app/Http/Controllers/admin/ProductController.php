<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function index(){
    	$products = Product::paginate(10);
    	return view('admin.products.index')->with(compact('products'));  //listado
    }
    public function create(){
    	return view('admin.products.create'); // formulario de registro
    }
    public function store(Request $request){

        //validacion de datos y mensajes personalizados para cualquier posible error durante el guardado
        $messages = [
            'name.required' => 'Es necesario ingresar un nombre para el producto',
            'name.min' => 'El nombre debe contener un minimo de 3 caracteres',
            'description.required' => 'Es necesario ingresar una descripción del producto',
            'description.max' => 'La descripción debe contener un máximo de 200 caracteres',
            'price.required' => 'Debe contener un precio',
            'price.numeric' => 'El precio debe ser un valor numerico',
            'price.min' => 'El precio debe contener valores mayores a 0'
        ];

        $rules = [
            'name' => 'required|min:3',
            'description' => 'required|max:200',
            'price' => 'required|numeric|min:0'
        ];
        $this->validate($request, $rules,$messages);


    	//registrar el nuevo producto en la bd
    	
    	$product = new Product();
    	$product->name = $request->input('name'); 
    	$product->description = $request->input('description'); 
    	$product->price = $request->input('price'); 
    	$product->long_description = $request->input('long_description'); 
    	$product->save();//INSERT

    	return redirect('/admin/products');
    }

      public function edit($id){

        $product = Product::find($id);
        return view('admin.products.edit')->with(compact('product'));  //listado
    }
 
    public function update(Request $request, $id){
         $messages = [
            'name.required' => 'Es necesario ingresar un nombre para el producto',
            'name.min' => 'El nombre debe contener un minimo de 3 caracteres',
            'description.required' => 'Es necesario ingresar una descripción del producto',
            'description.max' => 'La descripción debe contener un máximo de 200 caracteres',
            'price.required' => 'Debe contener un precio',
            'price.numeric' => 'El precio debe ser un valor numerico',
            'price.min' => 'El precio debe contener valores mayores a 0'
        ];

        $rules = [
            'name' => 'required|min:3',
            'description' => 'required|max:200',
            'price' => 'required|numeric|min:0'
        ];
        $this->validate($request, $rules,$messages);

        //actualizar un producto en la bd
        
        $product = Product::find($id);
        $product->name = $request->input('name'); 
        $product->description = $request->input('description'); 
        $product->price = $request->input('price'); 
        $product->long_description = $request->input('long_description'); 
        $product->save();//Guardar

        return redirect('/admin/products');
    }

       public function destroy($id){
        //eliminar el producto de la bd
        $product = Product::find($id);
        $product->delete();//DELETE

        return back();
    }
}

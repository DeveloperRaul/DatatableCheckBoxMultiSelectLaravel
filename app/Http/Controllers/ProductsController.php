<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;

use App\Http\Requests;

class ProductsController extends Controller
{
    public function index()
    {
        //Se Hace Un Listado De Todos Los Productos Existentes En Base De Datos
        $productos = Producto::get();
        //Se Retorna La Vista Principal De Productos Con La Lista De Productos
        return view('productos.index')->with('productos', $productos);
    }
}

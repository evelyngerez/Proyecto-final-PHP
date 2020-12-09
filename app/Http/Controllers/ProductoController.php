<?php
namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Producto::all();
        return view("productos.listado",
            ["productos"=>$productos]
        );
       
    }
    public function create()
    {
        
        return view("productos.crear");
        
    }

    public function store(Request $request)
    {
        $producto = new Producto();
        $producto->nombre = $request->nombre;
        $producto->descripcion = $request->descripcion;
        $producto->precio = $request->precio;

        $producto->save();

        return redirect()->route('productos.crear')->with('creado','Se creo el producto '.$producto->nombre);
    }
}

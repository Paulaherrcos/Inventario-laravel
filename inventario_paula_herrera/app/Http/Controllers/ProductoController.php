<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Producto;
use App\Models\Categoria;
use App\Models\Proveedor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductoController extends Controller
{
   /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usuario=Auth::user();
        $productos=Producto::all();
        return view('productos.index', compact('productos'));


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $usuario=Auth::user();
        $categorias=Categoria::all();
        $proveedores=Proveedor::all();

        return view('productos.create', compact('categorias', 'proveedores'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validar=$request->validate([
            'nombre'=>'string|max:255|required',
            'descripcion'=>'string|max:255',
            'precio'=>'numeric|required',
            'cantidad'=>'numeric|required',
            'categoria_id'=>'integer|required',
            'proveedor_id'=>'integer|required',
        ]);

        $producto= new Producto();
        $producto->nombre=$validar['nombre'];
        $producto->descripcion=$validar['descripcion'];
        $producto->precio=$validar['precio'];
        $producto->cantidad=$validar['cantidad'];
        $producto->categoria_id=$validar['categoria_id'];
        $producto->proveedor_id=$validar['proveedor_id'];

        $producto->save();

        return redirect()->route('productos.index')->with('success','Producto agregado con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $producto=Producto::find($id);
        if($producto){
            $producto->delete();
        return redirect()->route('productos.index')->with('success','Producto eliminado.');
        }else{
            return redirect()->route('productos.index')->with('error','No se ha podido eliminar ningun producto.');
        }
    }
}

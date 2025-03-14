<?php

namespace App\Http\Controllers;
use App\Models\Proveedor;

use Illuminate\Http\Request;

class ProveedorController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $proveedores=Proveedor::all();
        return view('proveedores.index', compact('proveedores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('proveedores.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validar=$request->validate([
            'nombre'=>'string|max:255|required',
            'correo_contacto'=>'string|max:255',
            'telefono'=>'numeric|required',
        ]);

        $proveedor= new Proveedor();
        $proveedor->nombre=$validar['nombre'];
        $proveedor->correo_contacto=$validar['correo_contacto'];
        $proveedor->telefono=$validar['telefono'];

        $proveedor->save();

        return redirect()->route('proveedores.index')->with('success','Producto agregado con éxito');
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
        //
    }
}

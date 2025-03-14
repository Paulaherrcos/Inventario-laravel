@extends('layouts.app')

@section('title', 'Página de Productos')

@section('content')
<style>
    .center{
        margin:auto;
        width:40%;
        text-align:center
    }
    h1{
        font-weight:bold;
        font-size:22px
    }
    .productos{
        border:1px solid black;
        width: auto;
        border-radius:5%;
        padding:3%;
        margin-top:20px
    }

    button{
        background-color:pink;
        border-radius:5%;
        padding:6px;
        font-weight:bold
    }
</style>
<div class="container center">
    <br>
    <h1 class="">LISTA PRODUCTOS</h1>
    <br>
    <a href="{{route('productos.create')}}"><button>Nuevo producto</button></a>
    <a href="{{route('categorias.index')}}"><button>Listado categorías</button></a>
    <a href="{{route('proveedores.index')}}"><button>Listado proovedores</button></a>
    @foreach($productos as $producto)
    <div class="productos">
        <div>
            <label for="">Nombre:</label>
            <label for="" name="nombre">{{ $producto->nombre }}</label>
        </div>
        <div>
            <label for="">Descripcion:</label>
            <label for="" name="descripcion">{{ $producto->descripcion }}</label>
        </div>
        <div>
            <label for="">Precio:</label>
            <label for="" name="precio">{{ $producto->precio }}</label>
        </div>
        <div>
            <label for="">Cantidad:</label>
            <label for="" name="cantidad">{{ $producto->cantidad }}</label>
        </div>
        <div>
            <label for="">Categoría:</label>
            <label for="" name="categoria_id">{{ $producto->categoria_id }}</label>
        </div>
        <div>   
            <label for="">Proveedor:</label>
            <label for="" name="proveedor_id">{{ $producto->proveedor_id }}</label>
        </div> 
        <button><a href="">Actualizar</a></button>
        <form action="{{route('productos.destroy', $producto->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Eliminar</button>
        </form>
    </div>
    <br>
    @endforeach
</div>

@endsection


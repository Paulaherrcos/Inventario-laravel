@extends('layouts.app')

@section('title', 'Página de Producto')

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
    <a href="{{route('productos.index')}}"><button>Listado productos</button></a>
    <a href="{{route('proveedores.index')}}"><button>Listado proovedores</button></a>

    <br>
    <br>
    <h1>DETALLES DEL PRODUCTO</h1>
    <div class="productos">
        <div>
            <label for="">Nombre:{{ $producto->nombre }}</label>
        </div>
        <div>
            <label for="">Descripción:{{ $producto->descripcion }}</label>
        </div>
        <div>
            <label for="">Precio:{{ $producto->precio }}</label>
        </div>
        <div>
            <label for="">Cantidad:{{ $producto->cantidad }}</label>
        </div>
        <div>
            <label for="">Categoría:{{ $producto->categoria->nombre ?? 'Sin categoría' }}</label>
        </div>
        <div>
            <label for="">Proveedor:{{ $producto->proveedor->nombre ?? 'Sin proveedor' }}</label>
        </div>
    </div>
</div>

</div>


@endsection
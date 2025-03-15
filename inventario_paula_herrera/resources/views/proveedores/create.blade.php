@extends('layouts.app')
@section('title', 'PaginaIndex Proveedores')

@section('content')
<style>
    form{
        margin:auto;
        width:40%;
        text-align:center
    }
    h1{
        font-weight:bold;
        font-size:27px;
        margin:20px
    }
    

    button{
        background-color:pink;
        border-radius:5%;
        padding:6px;
        font-weight:bold;
        margin-top:10px
    }

    select, input{
        width: 70%;
    }

    .nav-a{
        text-align:center;
    }
</style>
    <nav class="nav-a">
        <a href="{{route('productos.index')}}"><button>Lista productos</button></a>
        <a href="{{route('categorias.index')}}"><button>Listado categorías</button></a>
        <a href="{{route('productos.index')}}"><button>Listado productos</button></a>
    </nav>
<form action="{{route('proveedores.store')}}" method="POST">
    @csrf
        <h1>RELLENA TU PROVEEDOR</h1>
        <input type="text" name="nombre" required placeholder="Nombre">
        <br>
        <input type="correo" name="correo_contacto" placeholder="correo">
        <br>
        <input type="number" name="precio" placeholder="precio">
        <br>
        <input type="number" name="telefono" required placeholder="telefono">
        <br>
        <button type="submit">Agregar proveedor</button>

</form>


@endsection
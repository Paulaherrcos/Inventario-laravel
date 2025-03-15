@extends('layouts.app')
@section('title', 'Agregar categoría')

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
        <a href="{{route('proveedores.index')}}"><button>Lista proveedores</button></a>
        <a href="{{route('categorias.index')}}"><button>Listado categorías</button></a>
        <a href="{{route('productos.index')}}"><button>Listado productos</button></a>
    </nav>
<form action="{{route('categorias.store')}}" method="POST">
    @csrf
        <h1>RELLENA TU CATEGORÍA</h1>
        <input type="text" name="nombre" required placeholder="Nombre">
        <br>
        <button type="submit">Agregar categoría</button>

</form>


@endsection
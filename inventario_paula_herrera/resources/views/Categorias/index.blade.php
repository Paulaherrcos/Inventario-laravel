@extends('layouts.app')

@section('title', 'Página de Categorías')

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
    <h1 class="">LISTA CATEGORÍAS</h1>
    <br>
    <a href="{{route('productos.create')}}"><button>Nuevo producto</button></a>
    <a href="{{route('proveedores.index')}}"><button>Listado proveedores</button></a>
    <a href="{{route('productos.index')}}"><button>Listado productos</button></a>
    @foreach($categorias as $categoria)
    <div class="productos">
        <div>
            <label for="">Nombre:</label>
            <label for="" name="nombre">{{ $categoria->nombre }}</label>
        </div>
    @endforeach
</div>

@endsection


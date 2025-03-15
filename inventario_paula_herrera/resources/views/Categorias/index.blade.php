@extends('layouts.app')

@section('title', 'Página de Categorías')

@section('content')
<style>
    .center{
        width:35%;
        margin:auto;
        text-align:center
    }
    h1{
        font-weight:bold;
        font-size:22px
    }
    .productos{
        border:1px solid black;
        width: auto;
        padding:3%;
        margin:10px;
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
    <br>
    <br>
    <button><a href="{{route('categorias.create')}}">Nueva categoría</a></button>
    <br>
    @foreach($categorias as $categoria)
    <div class="productos">
        <div>
            <label for="">->Nombre:</label>
            <label for="" name="nombre">{{ $categoria->nombre }}</label>
        </div>
    </div>
    @endforeach

@endsection


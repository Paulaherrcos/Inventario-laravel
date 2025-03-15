@extends('layouts.app')

@section('title', 'Página de Proveedores')

@section('content')
<style>
    .center{
        margin:auto;
        width:35%;
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
    <h1 class="">LISTA PROOVEDORES</h1>
    <br>
    <a href="{{route('productos.create')}}"><button>Nuevo producto</button></a>
    <a href="{{route('categorias.index')}}"><button>Listado categorías</button></a>
    <a href="{{route('productos.index')}}"><button>Listado productos</button></a>
    <br>
    <br>
    <button><a href="{{route('proveedores.create')}}">Nuevo proovedor</a></button>
    <br>
    @foreach($proveedores as $proovedor)
    <div class="productos">
        <div>
            <label for="">Nombre:</label>
            <label for="" name="nombre">{{ $proovedor->nombre }}</label>
        </div>
        <div>
            <label for="">Correo:</label>
            <label for="" name="correo_contacto">{{ $proovedor->correo_contacto }}</label>
        </div>
        <div>
            <label for="">Teléfono:</label>
            <label for="" name="telefono">{{ $proovedor->telefono }}</label>
        </div>
        
</div>
    @endforeach

@endsection


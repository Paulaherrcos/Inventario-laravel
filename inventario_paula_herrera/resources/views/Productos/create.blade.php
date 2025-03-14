@extends('layouts.app')
@section('title', 'PaginaIndex productos')

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
<form action="{{route('productos.store')}}" method="POST">
    @csrf
        <h1>RELLENA TU PRODUCTO</h1>
        <input type="text" name="nombre" required placeholder="Nombre">
        <br>
        <input type="text" name="descripcion" placeholder="descripcion">
        <br>
        <input type="number" name="precio" placeholder="precio">
        <br>
        <input type="number" name="cantidad" required placeholder="cantidad">
        <br>
        @foreach($categorias as $categoria)
        <select name="categoria_id" id="categoria_id">
            <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
        </select>
        @endforeach
        <br>
        @foreach($proveedores as $proveedor)
        <select name="proveedor_id" id="proveedor_id">
            <option value="{{$proveedor->id}}">{{$proveedor->nombre}}</option>
        </select>
        @endforeach
        <br>
        <button type="submit">Agregar producto</button>

</form>


@endsection
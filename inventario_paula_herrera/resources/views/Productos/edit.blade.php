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
    <form action="{{route('productos.update', $producto->id)}}" method="POST">
        @csrf
        @method('PUT')
            <h1>EDITA TU PRODUCTO</h1>
            <input type="text" name="nombre" required placeholder="Nombre" value="{{$producto->nombre}}">
            <br>
            <input type="text" name="descripcion" placeholder="descripcion" value="{{$producto->descripcion}}">
            <br>
            <input type="number" name="precio" placeholder="precio" value="{{$producto->precio}}">
            <br>
            <input type="number" name="cantidad" required placeholder="cantidad" value="{{$producto->cantidad}}">
            <br>
                <select name="categoria_id" id="categoria_id">
            @foreach($categorias as $categoria)
                <option value="{{ $categoria->id }}" 
                    @if($producto->categoria_id == $categoria->id) selected @endif>
                    {{ $categoria->nombre }}
                </option>
            @endforeach
                </select>
                <br>

                <!-- Proveedores -->
                <select name="proveedor_id" id="proveedor_id">
                    @foreach($proveedores as $proveedor)
                        <option value="{{ $proveedor->id }}" 
                            @if($producto->proveedor_id == $proveedor->id) selected @endif>
                            {{ $proveedor->nombre }}
                        </option>
                    @endforeach
                </select>
            <br>
            <button type="submit">Actualizar producto</button>
        </form>


@endsection
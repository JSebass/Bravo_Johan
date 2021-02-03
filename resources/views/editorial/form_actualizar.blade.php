@extends('principal')
@section('contenido')
<div class="container">
<h1> Edición de Editoriales </h1>

    <form action="{{route('actualizarEditorial', $editorial->id) }}" method="POST">
        @csrf
       
        <label for="nombre">Nombre </label>
        <input type="text" id='nombreCat' name='nombre' class="form-control" required  value="{{$editorial->nombre}}"> <br> <br>
    
        <label for="direccion">Direccion </label>
        <input type="text" id='direccion' name='direccion' class="form-control" required value="{{$editorial->direccion}}"> <br> <br>
            
        <label for="telefono">Telefono </label>
        <input type="text" id='telefono' name='telefono' class="form-control" required value="{{$editorial->telefono}}"> <br> <br>

        <label for="ciudad">Ciudad </label>
        <input type="text" id='ciudad' name='ciudad' class="form-control" required value="{{$editorial->ciudad}}"> <br> <br>
            
        <button type="submit" class="btn btn-success">Actualizar </button>
        <a type="submit" class="btn btn-danger" href="{{route('listado_editorial')}}">Cancelar</a>

    </form>
@stop
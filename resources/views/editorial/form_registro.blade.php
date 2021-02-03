@extends('principal')
@section('contenido')
 
<div class="container">
<h1> Registro de Editorial </h1>
    <form action="{{ url('editorial/registro') }}" method="POST">
        @csrf
       
        <label for="nombre">Nombre </label>
        <input type="text" id='nombre' name='nombre' class="form-control" required> <br> <br>
    
        <label for="direccion">Direccion </label>
        <input type="text" id='direccion' name='direccion' class="form-control" required> <br> <br>

        <label for="telefono">Telefono </label>
        <input type="text" id='telefono' name='telefono' class="form-control" required> <br> <br>

        <label for="ciudad">Ciudad </label>
        <input type="text" id='ciudad' name='ciudad' class="form-control" required> <br> <br>
        
            
        <button type="submit" class="btn btn-success">Registrar </button>
        <a type="submit" class="btn btn-danger" href="{{route('listado_editorial')}}">Cancelar</a>

    </form>
@stop
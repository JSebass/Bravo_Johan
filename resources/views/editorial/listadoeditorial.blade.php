@extends('principal')
@section('contenido')

<h1> Listado de Editoriales </h1> <br>
<div align="right">
<a href="{{ route('form_registroEditorial') }}" class="btn btn-success" align="right">Registrar</a>
</div>
<br>
<table class="table" border='2'>
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre </th>
            <th scope="col">Descripcion</th>
            <th scope="col">Ciudad</th>
            <th scope="col">Teléfono </th>
            <th scope="col">Opciones</th>
            
        </tr>
    </thead>
    <tbody>
    @foreach($editorial as $e)
            <tr>
                <td> {{ $e->id }} </td>
                <td> {{ $e->nombre }} </td>
                <td> {{ $e->direccion }}</td>
                <td> {{ $e->ciudad }}</td>
                <td> {{ $e->telefono }}</td>
                <td align="center"> <a href="{{route('form_actualizaEditorial',$e->id)}}" class="btn btn-success" >Actualizar</a></td>               
            </tr>
    @endforeach
    </tbody>
</table


@stop
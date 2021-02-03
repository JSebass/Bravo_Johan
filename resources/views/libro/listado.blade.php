@extends('principal')
@section('contenido')

<h1> Listado de Libros </h1> <br>

<table class="table" border='2'>
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">ISBN </th>
            <th scope="col">Título</th>
            <th scope="col">Stock </th>
            <th scope="col">Estado </th>
            <th scope="col">Editorial </th>
            <th scope="col">Precio</th>
            <th scope="col">Descuento </th>
        </tr>
    </thead>
    <tbody>
    @foreach($libros as $l)
            <tr>
                <td> {{ $l->id }} </td>
                <td> {{ $l->isbn }} </td>
                <td> {{ $l->titulo }}</td>
                <td> {{ $l->stock }}</td>
                @if($l->stock == 0)
                    <td> Agotado </td>
                @elseif($l->stock > 0 && $l->stock <=10)
                    <td> Ultimas Unidades</td>
                    @else
                    <td> Disponible </td>
                @endif
                
                <td> {{ $l->nombre }}</td>
                <td> {{ $l->precio}}</td>

                @if($l->nombre == 'Norma'||$l->nombre == 'La Santillana')
                    {{$porcentaje=0.05}}
                    {{$pre=$l->precio}}
                    {{ $descuento=$pre*$porcentaje}}
                    <td> {{$descuento}} </td>
                @else
                    <td> 0 </td>
                @endif

                
                
            </tr>
    @endforeach
    </tbody>
</table


@stop

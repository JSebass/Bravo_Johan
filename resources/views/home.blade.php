@extends('principal')
@section('contenido')
    <h1 align="center"> Libreria Nacional </h1>
    <div class="container" >
        <div class="row" style="padding: 1em;">
            <div class="col-md-4"  style="padding: 1em;">
                <div class="card" style="width: 20rem;height: 25em;">
                    <img src='{{url("/imagenes/nosotros.jpg")}}' class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"> Nosotros </h5>
                        <p class="card-text"> Contamos con 250 Proveedores y Editoriales 
                        entre las cuales están las más representativas del mundo editorial en lengua española e ingles </p>
                        
                    </div>               
                </div>
            </div>
            
            <div class="col-md-4" style="padding: 1em;">
                <div class="card" style="width: 20rem;height: 25em;">
                    <img src='{{url("/imagenes/historia.jpg")}}' class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"> Historia </h5>
                        <p class="card-text"> La Librería Nacional de Colombia fue fundada en la ciudad de Barranquilla 
                        en septiembre de 1941, y fue pionera en la modalidad de autoservicio y en la venta y distribución de 
                        revistas en el país </p>
                        
                    </div>               
                </div>
            </div>
            <div class="col-md-4" style="padding: 1em;">
                <div class="card" style="width: 20rem;height: 25em;">
                    <img src='{{url("/imagenes/servicios.jpg")}}' class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"> Servicios </h5>
                        <p class="card-text"> Mensualmente resibimos un promedio de 500 novedades diveresas, entre los que se 
                        destacan los libros de mayor venta en todo el mundo los bestseller de éxito siempre estan primero en 
                        nuestras librerías </p>
                        
                    </div>               
                </div>
            </div>
        </div>    
    </div>
    
@stop
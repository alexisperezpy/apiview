@extends('adminlte::page')

@section('title', 'Usuarios')

@section('content_header')
    <h1 class="text-center bg-dark">Listado de Usuarios</h1>
    
@stop

@section('content')

<div class="container">
    {{-- <div class="bg-dark">
        <h5 class="text-center">Ejmplo de consumo de API de un listado de registros en formato JSON desde www.jsonplaceholder.typicode.com</h5>
    </div>
    <br> --}}
    
    <div class="row d-flex justify-content-center">
        @foreach ($usuarios as $usuario) 
            <div class="col-sm-5 text-center">
                <div class="card mb-2">
                    <div class="card-body mb-8">
                        <h5 class="mt-1 mb-1 font-weight-bold">{{ $usuario['name']}}</h5><br>

                        <h6 class="card-subtitle mb-2 text-muted">email: {{$usuario['email']}} </h6>

                        <h6 class="card-subtitle mb-2 text-muted">Web: {{$usuario['website']}} </h6>
 
                        <h6 class="card-subtitle mb-2 text-muted">Dirección: {{$usuario['address']['street']}} </h6>
                       
                        <h6 class="card-subtitle mb-2 text-muted">compañia: {{$usuario['company']['name']}} </h6>      
                            
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    
</div>
@stop


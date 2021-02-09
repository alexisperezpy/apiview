@extends('adminlte::page')

@section('title', 'Viewer')

@section('content_header')
    <h1 class="Api Viewer</h1>
@stop

@section('content')

<div class="container">
    <div class="card mx-auto" style="width:450px">
        <img src="{{ asset('img/riesgos.jpg') }}" class="card-img-top img-fluid rounded" alt="" heigth=>
                   
        <div class="card-body">
            <h5 text-center>Ejemplo de consumo de API, utilizando laravel 8</h5>
            <div class="d-flex justify-content-center">
            <a href="/usuarios" class="btn btn-primary  mr-2">Ver Usuarios</a>
            <a href="/fotos" class="btn btn-primary mr-2">Ver Fotos</a>
            <a href="/posts" class="btn btn-primary mr-2">Ver Posts</a>
            </div>
        </div>       
    </div>
</div>

@stop


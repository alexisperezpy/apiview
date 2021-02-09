@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1 class="text-center bg-dark">Listados de fotos</h1>
@stop

@section('content')
 <div class="container">
    {{-- <div class="bg-dark">
        <h5 class="text-center">Ejmplo de consumo de API de un listado de registros en formato JSON desde www.jsonplaceholder.typicode.com</h5>
    </div>
    <br> --}}
    
    <div class="row">
        @foreach ($fotos as $foto) 
            <div class="col-sm-4 text-center">
                <div class="card mb-2 style="width:300px">
                    <img src="{{ $foto['thumbnailUrl'] }}"alt="">
                    <div class="card-body mb-8">
                        <h5 class="mt-1 mb-1 font-weight-bold">{{ $foto['title']}}</h5><br> 
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    
</div>
@stop

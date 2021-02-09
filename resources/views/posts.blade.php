@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1 class="text-center  bg-dark">Listado de Posts</h1>
@stop

@section('content')

<div class="container">

    
    <div class="container">
    
    <div class="row">
        @foreach ($posts as $post) 
            <div class="col-sm-6 text-center">
                <div class="card mb-2">
                    <div class="card-body mb-8">
                        <h5 class=" font-weight-bold">{{ $post['title']}}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{$post['body']}} </h6>  
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    
</div>
@stop

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    @can('admin.products.create')
        <a class="btn btn-secondary float-right" href="{{ route('admin.products.create') }}">Nuevo producto</a>
    @endcan
    
    <h1>Lista de Productos</h1>
@stop

@section('content')

    @livewire('admin.products-index')

@stop

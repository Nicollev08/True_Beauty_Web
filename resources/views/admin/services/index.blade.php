@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    @can('admin.services.create')
        <a class="btn btn-secondary float-right" href="{{ route('admin.services.create') }}">Nuevo servicio</a>
    @endcan
    <h1>Lista de Servicios</h1>
@stop

@section('content')

   @livewire('admin.services-index')

@stop

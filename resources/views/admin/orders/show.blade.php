@extends('adminlte::page')

@section('title', 'Dashboard')
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
@section('content_header')

@stop

@section('content')
    @livewire('admin.status-order', ['order' => $order])
@stop

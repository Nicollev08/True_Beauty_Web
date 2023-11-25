@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    @can('admin.options.create')
        <a class="btn btn-secondary float-right" href="{{ route('admin.options.create') }}">Nueva option</a>
    @endcan

    <h1>Lista de Opciones</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{ session('info') }}</strong>
        </div>
    @endif

    {{-- GENERAR REPORTES --}}
    <a href="{{ route('admin.options.pdf') }}" class="btn btn-danger btn-lg" target="_blank" title="Ver Pdf"><i
            class="fa-solid fa-file-pdf fa-lg" style="color: #ffffff;"></i></a>
    <a href="{{ route('admin.options.excel') }}" class="btn btn-success btn-lg" target="_blank" title="Ver Excel"><i
            class="fa-solid fa-file-excel fa-lg" style="color: #ffffff;"></i></a>


    <div class="card">

        <div class="card-body">
            @if ($options->count())
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>NOMBRE</th>
                            <th>TIPO</th>
                            <th colspan="2">ACCIONES</th>
                        </tr>
                    </thead>



                    <tbody>
                        @foreach ($options as $option)
                            <tr>
                                <td>{{ $option->id }}</td>
                                <td>{{ $option->name }}</td>
                                <td>{{ $option->type }}</td>
                                <td width="10px">
                                    <a class="btn btn-primary" href="{{ route('admin.options.edit', $option) }}">Editar</a>
                                </td>
                                <td width="10px">
                                    <form action="{{ route('admin.options.destroy', $option) }}" method="POST">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn btn-danger">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>


                </table>
            @else
                <div class="card-body">
                    <strong><i class="fa-solid fa-circle-exclamation" style="color: #265cba;"></i> No hay opciones
                        registrados.</strong>
                </div>

            @endif

        </div>

    </div>

@stop

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    @can('admin.cities.index')
        <a class="btn btn-secondary float-right" href="{{ route('admin.cities.create') }}">Nueva ciudad</a>
    @endcan

    <h1>Lista de Ciudades</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{ session('info') }}</strong>
        </div>
    @endif

    {{-- GENERAR REPORTES --}}
    {{-- <a href="{{ route('admin.categories.pdf') }}" class="btn btn-danger btn-lg" target="_blank" title="Ver Pdf"><i
            class="fa-solid fa-file-pdf fa-lg" style="color: #ffffff;"></i></a>
    <a href="{{ route('admin.categories.excel') }}" class="btn btn-success btn-lg" target="_blank" title="Ver Excel"><i
            class="fa-solid fa-file-excel fa-lg" style="color: #ffffff;"></i></a> --}}

    <div class="card">

        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NOMBRE</th>
                        <th>COSTO</th>
                        <th>DEPARTAMENTO</th>
                        <th colspan="2">ACCIONES</th>
                    </tr>
                </thead>

                @if ($cities->count())

                    <tbody>
                        @foreach ($cities as $city)
                            <tr>
                                <td>{{ $city->id }}</td>
                                <td>{{ $city->name }}</td>
                                <td>{{ $city->cost }}</td>

                                <td>{{ $city->department->name }}</td>


                                <td width="10px">
                                    <a class="btn btn-primary" href="{{ route('admin.cities.edit', $city) }}">Editar</a>
                                </td>
                                <td width="10px">
                                    <form action="{{ route('admin.cities.destroy', $city) }}" method="POST">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn btn-danger">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                @else
                    <div class="alert alert-primary d-flex align-items-center" role="alert">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img"
                            aria-label="Warning:">
                            <path
                                d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
                        </svg>
                        <div>
                            No hay ciudades registradas
                        </div>
                    </div>

                @endif

            </table>

        </div>

    </div>
@stop

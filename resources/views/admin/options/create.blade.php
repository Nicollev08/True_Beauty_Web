@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Crear options</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{ route('admin.options.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="name" id="name"
                        placeholder="Nombre de la opción">

                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                </div>

                <div class="mb-3">
                    <label for="type" class="form-label">Tipo</label>
                    <input type="text" class="form-control" name="type" id="type"
                        placeholder="Tipo">

                    @error('type')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                </div>
                <button type="submit" class="btn btn-primary">Crear options</button>
            </form>
        </div>
    </div>
@stop

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Crear categoría</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{ route('admin.categories.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="name" id="name"
                        placeholder="Nombre de la categoría">

                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                </div>
                <button type="submit" class="btn btn-primary">Crear categoría</button>
            </form>
        </div>
    </div>
@stop

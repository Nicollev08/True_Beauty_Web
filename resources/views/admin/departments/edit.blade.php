@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar departamento</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">

            <form method="POST" action="{{ route('admin.departments.update', $department->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="name" class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{ $department->name }}"
                        placeholder="Nombre del departamento">

                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                </div>

                <button type="submit" class="btn btn-primary">Actualizar departamento</button>
            </form>


        </div>

    </div>

@stop

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar ciudad</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">

            <form method="POST" action="{{ route('admin.cities.update', $city->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="name" class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{ $city->name }}"
                        placeholder="Nombre del producto">

                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                </div>

                <div class="mb-3">
                    <label for="cost" class="form-label">Costo</label>
                    <input type="text" class="form-control" name="cost" id="cost" value="{{ $city->cost }}"
                        placeholder="Nombre de la ciudad">

                    @error('cost')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                </div>

                <div class="mb-3">
                    <label for="department">Departamento</label>
                    <select name="department_id" id="departmenty_id">
                        <option value="{{ $city->department->id }}">{{ $city->department->name }}</option>
                        @foreach ($departments as $department)
                            <option value="{{ $department->id }}">{{ $department->name }}</option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Actualizar ciudad</button>
            </form>


        </div>

    </div>

@stop

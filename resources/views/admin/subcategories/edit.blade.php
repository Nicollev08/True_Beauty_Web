@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar subcategoría</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{ session('info') }}</strong>
        </div>
    @endif

    <div class="card">
        <div class="card-body">

            <form action="{{ route('admin.subcategories.update', $subcategory) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="name" class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{ $subcategory->name }}"
                        placeholder="Nombre del departamento">

                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                </div>

                <h2 class="h5">¿A que categoría pertenece?</h2>

                @foreach ($categories as $category)
                    <div>
                        <label>
                            <input type="radio" name="category_id" value="{{ $category->id }}"
                                {{ $subcategory->category && $subcategory->category->id === $category->id ? 'checked' : '' }}
                                class="mr-1">
                            {{ $category->name }}
                        </label>
                    </div>
                @endforeach

                <button type="submit" class="btn btn-primary mt-2">Actualizar</button>
            </form>

        </div>
    </div>
@stop

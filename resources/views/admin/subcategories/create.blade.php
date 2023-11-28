@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Crear subcategoría</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{ route('admin.subcategories.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Nombre de la subcategoría">

                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <h2 class="h5">¿A qué categoría pertenece?</h2>
                    @foreach ($categories as $category)
                        <div>
                            <label>
                                <input type="checkbox" name="category_id" id="category_id" value="{{ $category->id }}" class="mr-1">
                                {{ $category->name }}
                            </label>
                        </div>
                    @endforeach
                </div>

                <button type="submit" class="btn btn-primary">Crear subcategoría</button>

            </form>
        </div>
    </div>
@stop

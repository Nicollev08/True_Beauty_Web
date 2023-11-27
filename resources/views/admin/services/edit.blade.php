@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar servicio</h1>
@stop

@section('content')

<div class="card">
    <div class="card-body">

        <form method="POST" action="{{ route('admin.services.update', $service->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
              <label for="name" class="form-label">Nombre</label>
              <input type="text" class="form-control" name="name" id="name" value="{{ $service->name }}" placeholder="Nombre del tip" >

              @error('name')
              <span class="text-danger">{{ $message }}</span>
              @enderror

            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descripción</label>
                <input type="text" class="form-control" name="description" id="description" value="{{ $service->description }}" placeholder="Descripción del tip" >

                @error('description')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="duration" class="form-label">Duración</label>
                <input type="text" class="form-control" name="duration" id="duration" value="{{ $service->duration }}" placeholder="Descripción del tip" >

                @error('duration')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label" for="image">Imagen actual</label>
                <img src="{{ asset('storage/' . $service->image) }}" alt="Imagen actual" style="max-width: 100px;">
            </div>
            
            <div class="mb-3">
                <label class="form-label" for="image">Cargar nueva imagen (opcional)</label>
                <input class="form-control" type="file" id="image" name="image">
                
                @error('image')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Actualizar producto</button>
        </form>

    </div>
</div>
@stop


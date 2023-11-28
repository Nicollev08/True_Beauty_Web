@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Crear servicio</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{ route('admin.services.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                  <label for="name" class="form-label">Nombre</label>
                  <input type="text" class="form-control" name="name" id="name" placeholder="Nombre del servicio" >

                  @error('name')
                  <span class="text-danger">{{ $message }}</span>
                  @enderror

                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Descripción</label>
                    <input type="text" class="form-control" name="description" id="description" placeholder="Descripción del servicio" >

                    @error('description')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="duration" class="form-label">Duración</label>
                    <input type="text" class="form-control" name="duration" id="duration" placeholder="Duración del servicio" >

                    @error('duration')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label" for="image">Imagen</label>
                    <input class="form-control" type="file" id="image" name="image">
                  </div>
                <button type="submit" class="btn btn-primary">Crear producto</button>
            </form>
        </div>
    </div>
@stop


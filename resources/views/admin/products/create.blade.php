@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Crear producto</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{ route('admin.products.store') }}" enctype="multipart/form-data">
                @csrf



                <input type="hidden" class="form-control" name="sku" id="sku" placeholder="SKU del producto" readonly>


                <div class="mb-3">
                    <label for="name" class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="name" id="name"
                        placeholder="Nombre del producto">

                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Descripción</label>
                    <input type="text" class="form-control" name="description" id="description"
                        placeholder="Descripción del producto">

                    @error('description')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Precio</label>
                    <input type="text" class="form-control" name="price" id="price"
                        placeholder="Precio del producto">

                    @error('price')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="subcategory_id">Categoría</label>
                    <select name="subcategory_id" id="subcategory_id">
                        <option value="">Seleccione una categoría</option>
                        @foreach ($subcategories as $subcategory)
                            <option value="{{ $subcategory->id }}">{{ $subcategory->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label" for="image_path">Imagen</label>
                    <input class="form-control" type="file" id="image_path" name="image_path">
                </div>

                <button type="submit" class="btn btn-primary">Crear producto</button>
            </form>
        </div>
    </div>
@stop

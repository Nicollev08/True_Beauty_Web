@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar producto</h1>
@stop

@section('content')

    <div class="card">
        <div class="card-body">

            <form method="POST" action="{{ route('admin.products.update', $product->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <input type="text" name="sku" value="{{ $product->sku }}">

                <div class="mb-3">
                    <label for="name" class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{ $product->name }}"
                        placeholder="Nombre del producto">

                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Descripción</label>
                    <input type="text" class="form-control" name="description" id="description"
                        value="{{ $product->description }}" placeholder="Nombre del producto">

                    @error('description')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="precio" class="form-label">Precio</label>
                    <input type="text" class="form-control" name="price" id="price" value="{{ $product->price }}"
                        placeholder="Nombre del producto">

                    @error('price')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="quantity" class="form-label">Stock</label>
                    <input type="text" class="form-control" name="quantity" id="quantity"
                        value="{{ $product->quantity }}" placeholder="Nombre del producto">

                    @error('quantity')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="subcategory_id">Categoría</label>
                    <select name="subcategory_id" id="subcategory_id">
                        <option value="{{ $product->subcategory->id }}">{{ $product->subcategory->name }}</option>
                        @foreach ($subcategories as $subcategory)
                            <option value="{{ $subcategory->id }}">{{ $subcategory->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="status">ESTADO</label>
                    <select name="status" id="status">
                        @foreach ($statusLabels as $value => $label)
                            <option value="{{ $value }}" {{ $product->status == $value ? 'selected' : '' }}>
                                {{ $label }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label" for="image_path">Imagen actual</label>
                    <img src="{{ asset('storage/' . $product->image_path) }}" alt="Imagen actual"
                        style="max-width: 100px;">
                </div>

                <div class="mb-3">
                    <label class="form-label" for="image_path">Cargar nueva imagen (opcional)</label>
                    <input class="form-control" type="file" id="image_path" name="image_path">

                    @error('image_path')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Actualizar producto</button>
            </form>

        </div>
    </div>
@stop

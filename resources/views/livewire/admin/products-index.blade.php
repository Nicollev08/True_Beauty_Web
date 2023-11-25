<div>
    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{ session('info') }}</strong>
        </div>
    @endif

    <div class="card">

        <div class="card-header">
            <input type="text" wire:model.live="search" class="form-control"
                placeholder="Ingrese el nombre del producto">
        </div>

           {{-- GENERAR REPORTES --}}
    <a href="{{ route('admin.products.pdf') }}" class="btn btn-danger btn-lg" target="_blank" title="Ver Pdf"><i
            class="fa-solid fa-file-pdf fa-lg" style="color: #ffffff;"></i></a>
    <a href="{{ route('admin.products.excel') }}" class="btn btn-success btn-lg" target="_blank" title="Ver Excel"><i
            class="fa-solid fa-file-excel fa-lg" style="color: #ffffff;"></i></a>
            

        <div class="card-body">
            @if ($products->count())
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>SKU</th>
                            <th>NOMBRE</th>
                            <th>DESCRIPCIÓN</th>
                            <th>IMAGEN</th>
                            <th>PRECIO</th>
                            <th>STOCK</th>
                            <th>SUBCATEGORÍA</th>
                            <th colspan="2">ACCIONES</th>
                        </tr>
                    </thead>

         


                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <td>{{ $product->id }}</td>
                                <td>{{ $product->sku }}</td>

                                <td>{{ $product->name }}</td>
                                <td>{{ $product->description }}</td>
                                <td><img src="{{ asset('storage/' . $product->image_path) }}" alt=""
                                        style="max-width: 100px;">
                                </td>
                                <td>{{ $product->price }}</td>
                                <td>{{ $product->quantity }}</td>

                                <td>{{ $product->subcategory->name }}</td>

                                <td width="10px">
                                    <a class="btn btn-primary"
                                        href="{{ route('admin.products.edit', $product) }}">Editar</a>
                                </td>
                                <td width="10px">
                                    <form action="{{ route('admin.products.destroy', $product) }}" method="POST">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn btn-danger">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>


                </table>
            @else
                <div class="card-body">
                    <strong><i class="fa-solid fa-circle-exclamation" style="color: #265cba;"></i> No hay productos
                        registrados.</strong>
                </div>
            @endif

        </div>

        <div class="card-footer">
            {{ $products->links() }}
        </div>

    </div>

</div>

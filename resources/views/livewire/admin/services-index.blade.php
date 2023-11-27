<div>
    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{ session('info') }}</strong>
        </div>
    @endif

    <div class="card">
        <div class="card-header">
            <input type="text" wire:model.live="search" class="form-control"
                placeholder="Ingrese el nombre del servicio">
        </div>

        <div class="card-body">

            @if ($services->count())

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>IMAGEN</th>
                            <th>NOMBRE</th>
                            <th>DESCRIPCION</th>
                            <th>DURACIÓN</th>
                            <th colspan="2">ACCIONES</th>
                        </tr>
                    </thead>


                    <tbody>

                        @foreach ($services as $service)
                            <tr>
                                <td>{{ $service->id }}</td>
                                <td><img src="{{ asset('storage/' . $service->image) }}" alt=""
                                        style="max-width: 100px;">
                                </td>
                                <td>{{ $service->name }}</td>
                                <td>{{ $service->description }}</td>
                                <td>{{ $service->duration }}</td>
                                <td width="10px">
                                    <a class="btn btn-primary" href="{{ route('admin.services.edit', $service) }}">Editar</a>
                                </td>
                                <td width="10px">
                                    <form action="{{ route('admin.services.destroy', $service) }}" method="POST">
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
                    <strong><i class="fa-solid fa-circle-exclamation" style="color: #265cba;"></i> No hay servicios
                        registrados.</strong>
                </div>

            @endif

        </div>

        <div class="card-footer">
            {{ $services->links() }}
        </div>

    </div>

</div>

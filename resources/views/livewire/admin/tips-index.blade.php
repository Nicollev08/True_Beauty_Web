<div>
    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{ session('info') }}</strong>
        </div>
    @endif

    <div class="card">
        <div class="card-header">
            <input type="text" wire:model.live="search" class="form-control"
                placeholder="Ingrese el nombre del tip">
        </div>

        {{-- GENERAR REPORTES --}}
    <a href="{{ route('admin.tips.pdf') }}" class="btn btn-danger btn-lg" target="_blank" title="Ver Pdf"><i
            class="fa-solid fa-file-pdf fa-lg" style="color: #ffffff;"></i></a>
    <a href="{{ route('admin.tips.excel') }}" class="btn btn-success btn-lg" target="_blank" title="Ver Excel"><i
            class="fa-solid fa-file-excel fa-lg" style="color: #ffffff;"></i></a>

        <div class="card-body">

            @if ($tips->count())


                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>IMAGEN</th>
                            <th>NOMBRE</th>
                            <th>DESCRIPCION</th>
                            <th colspan="2">ACCIONES</th>
                        </tr>
                    </thead>


                    <tbody>

                        @foreach ($tips as $tip)
                            <tr>
                                <td>{{ $tip->id }}</td>
                                <td><img src="{{ asset('storage/' . $tip->image) }}" alt=""
                                        style="max-width: 100px;">
                                </td>
                                <td>{{ $tip->name }}</td>
                                <td>{{ $tip->description }}</td>
                                <td width="10px">
                                    <a class="btn btn-primary" href="{{ route('admin.tips.edit', $tip) }}">Editar</a>
                                </td>
                                <td width="10px">
                                    <form action="{{ route('admin.tips.destroy', $tip) }}" method="POST">
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
                    <strong><i class="fa-solid fa-circle-exclamation" style="color: #265cba;"></i> No hay tips
                        registrados.</strong>
                </div>

            @endif

        </div>

        <div class="card-footer">
            {{ $tips->links() }}
        </div>

    </div>

</div>

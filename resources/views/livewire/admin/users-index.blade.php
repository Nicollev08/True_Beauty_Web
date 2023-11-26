<div>

    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{ session('info') }}</strong>
        </div>
    @endif

    <div class="card">

        <div class="card-header">
            <input type="text" wire:model.live="search" class="form-control"
                placeholder="Ingrese el nombre o correo del usuario">
        </div>


        <div class="card-body">

            @if ($users->count())

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>NOMBRE</th>
                            <th>EMAIL</th>
                            <th colspan="2">ACCIONES</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td width="10px%">
                                    <a class="btn btn-primary"
                                        href="{{ route('admin.users.edit', $user->id) }}">Editar</a>
                                </td>
                                <td width="10px">
                                    <form action="{{ route('admin.users.destroy', $user) }}" method="POST">
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
                    <strong><i class="fa-solid fa-circle-exclamation" style="color: #265cba;"></i> No hay usuarios
                        registrados.</strong>
                </div>

            @endif

        </div>

        <div class="card-footer">
            {{ $users->links() }}
        </div>

    </div>

</div>

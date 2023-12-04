<!-- CSS de Bootstrap -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

<!-- JavaScript de Bootstrap (requiere jQuery) -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>



<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.6.0/main.css">
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.9/index.global.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.6.0/locales-all.js"></script>

<link rel="stylesheet" href="{{ asset('css/button-modal.css') }}">

<link rel="shortcut icon" href="{{ asset('IMG/calendar.png') }}" type="image/x-icon">

<x-app-layout>
    @section('title', 'Agenda')

    <div class="container p-32 w-full max-w-screen mx-auto">
        <x-slot name="header">
        </x-slot>

        <div class="container">
            <div id="agenda"></div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="evento" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Agenda</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="formEvento" action="">

                            {!! csrf_field() !!}

                            <div class="form-floating mb-3 d-none">
                                <input type="text" class="form-control" id="id" name="id"
                                    placeholder="Id del evento">
                                <label for="id">Id</label>
                            </div>

                            
                            <label for="">Servicio: </label>
                            <div class="form-floating mb-3">
                                <select name="service_id" id="service_id">
                                    <option value="">Seleccione un servicio</option>
                                    @foreach ($services as $service)
                                        <option value="{{ $service->id }}">{{ $service->name }}</option>
                                    @endforeach
                                </select>
                            </div>


                            <label for="">Tipo de agenda: </label>
                            <div class="form-floating mb-3">
                                <select name="type" id="type">
                                    <option value="">Seleccione tipo</option>
                                    @foreach ($statusLabels as $value => $label)
                                        <option value="{{ $value }}">{{ $label }}</option>
                                    @endforeach
                                </select>
                            </div>                            


                            <div class="form-floating mb-3">
                                <textarea class="form-control" name="descripcion" id="descripcion" placeholder="Descripción del evento" id="description"
                                    style="height: 100px"></textarea>
                                <label for="descripcion">Descripción</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="date" class="form-control" name="start" id="start"
                                    placeholder="Fecha inicial">
                                <label for="start">Fecha</label>
                            </div>

                        </form>
                    </div>
                    <div class="modal-footer">

                        <button type="button" class="btn btn-success text-dark" id="btnGuardar">Guardar</button>
                        <button type="button" class="btn btn-warning" id="btnModificar">Modificar</button>
                        <button type="button" class="btn btn-danger text-dark" id="btnEliminar">Eliminar</button>
                        <button type="button" class="btn btn-secondary text-dark" data-bs-dismiss="modal"
                            id="close">Close</button>

                    </div>
                </div>
            </div>
        </div>

        <x-slot name="footer">
        </x-slot>

        <script src="{{ asset('JS/agenda.js') }}" defer></script>

    </div>

</x-app-layout>

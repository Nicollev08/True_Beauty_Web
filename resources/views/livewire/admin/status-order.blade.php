<div class="container-md mx-auto px-4 py-5">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">


    <div class="bg-secondary rounded-lg shadow-lg p-4 mb-4 d-flex align-items-center justify-center">

        <div class="position-relative">
            <div
                class="rounded-circle h-16 w-16 d-flex items-center justify-content-center 
                {{ $order->status >= 2 && $order->status != 5 ? 'bg-success' : 'bg-secondary' }}">
                <i class="fas fa-check text-white fa-2x"></i>
            </div>

            <div class="position-absolute -start-0.5 mt-1">
                <p class="text-center">Recibido</p>
            </div>
        </div>

        <div
            class="flex-grow-1 
            {{ $order->status >= 3 && $order->status != 5 ? 'bg-success' : 'bg-secondary' }} h-1 ms-2">
        </div>

        <div class="position-relative">
            <div
                class="rounded-circle h-16 w-16 d-flex items-center justify-content-center 
                {{ $order->status >= 3 && $order->status != 5 ? 'bg-success' : 'bg-secondary' }}">
                <i class="fa-solid fa-truck fa-2x" style="color: #ffffff;"></i>
            </div>

            <div class="position-absolute -start-0.5 mt-1">
                <p class="text-center">Enviado</p>
            </div>
        </div>

        <div
            class="flex-grow-1 
            {{ $order->status >= 4 && $order->status != 5 ? 'bg-success' : 'bg-secondary' }} h-1 ms-2">
        </div>

        <div class="position-relative">
            <div
                class="rounded-circle h-16 w-16 d-flex items-center justify-content-center 
                {{ $order->status >= 4 && $order->status != 5 ? 'bg-primary' : 'bg-secondary' }}">
                <i class="fas fa-check text-white fa-2x"></i>
            </div>

            <div class="position-absolute -start-1 mt-1">
                <p class="text-left">Entregado</p>
            </div>
        </div>

    </div>



    <div class="bg-white rounded-lg shadow-lg p-4 mb-4">
        <p class="text-gray-700 text-uppercase"><span class="font-semibold">Número de orden:</span>
            Orden-{{ $order->id }}</p>

        <form wire:submit.prevent="update">
            <div class="d-flex space-3 mt-2">
                <div class="form-check ml-4">
                    <input wire:model="status" type="radio" name="status" value="2"
                        class="form-check-input me-2">
                    <label class="form-check-label">Recibido</label>
                </div>

                <div class="form-check ml-4">
                    <input wire:model="status" type="radio" name="status" value="3"
                        class="form-check-input me-2">
                    <label class="form-check-label">Enviado</label>
                </div>

                <div class="form-check ml-4">
                    <input wire:model="status" type="radio" name="status" value="4"
                        class="form-check-input me-2">
                    <label class="form-check-label">Entregado</label>
                </div>

                <div class="form-check ml-4">
                    <input wire:model="status" type="radio" name="status" value="5"
                        class="form-check-input me-2">
                    <label class="form-check-label">Anulado</label>
                </div>
            </div>

            <div class="d-flex mt-4">
                <button type="submit" class="btn btn-primary ms-auto">Actualizar</button>
            </div>
        </form>
    </div>

    <div class="bg-white rounded-lg shadow-lg p-4 mb-4">
        <div class="row g-6 text-gray-700">
            <div class="col-md-6">
                <p class="text-lg font-semibold text-uppercase">Envío</p>

                @if ($order->envio_type == 1)
                    <p class="text-sm">Los productos deben ser recogidos en tienda</p>
                    <p class="text-sm">Calle falsa 123</p>
                @else
                    <p class="text-sm">Los productos Serán enviados a:</p>
                    <p class="text-sm">{{ $envio->address }}</p>
                    <p>{{ $envio->department }} - {{ $envio->city }}
                    </p>
                @endif


            </div>

            <div class="col-md-6">
                <p class="text-lg font-semibold text-uppercase">Datos de contacto</p>

                <p class="text-sm">Persona que recibirá el producto: {{ $order->contact }}</p>
                <p class="text-sm">Teléfono de contacto: {{ $order->phone }}</p>
            </div>
        </div>
    </div>

    <div class="bg-white rounded-lg shadow-lg p-4 text-gray-700 mb-4">
        <p class="text-xl font-semibold mb-4">Resumen</p>

        <table class="table w-100">
            <thead>
                <tr>
                    <th></th>
                    <th>Precio</th>
                    <th>Cant</th>
                    <th>Total</th>
                </tr>
            </thead>

            <tbody class="divide-y divide-gray-200">
                @foreach ($items as $item)
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <img class="mr-3" src="{{$item->options->image_path}}" alt="" style="max-height: 60px; max-width: 60px;">
                                <div class="">
                                    <h1 class="font-bold w-10" style="font-size: 20px">{{ $item->name }}</h1>
                                </div>
                            </div>
                        </td>

                        <td style="text-align: left">
                            {{ $item->price }} USD
                        </td>

                        <td style="text-align: left">
                            {{ $item->qty }}
                        </td>

                        <td style="text-align: left">
                            {{ $item->price * $item->qty }} USD
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="assets/css/orden.css">
    <title>ORDEN</title>
</head>

<body>
    <div id="header">
        <img class="logo" src="IMG/logo.png" width="50px" height="50px">
        <div class="text-logo">
            <p>TRUE BEAUTY</p>
        </div>
        <h1>FACTURA DE ORDEN</h1>
    </div>

    <p>Número de orden - {{ $order->id }}</p>

    <table border="1">
        <thead>
            <tr>
                <th>Producto</th>
                <th>Cantidad</th>
                <th>Precio Unitario</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            @foreach (json_decode($order->content) as $item)
                <tr>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->qty }}</td>
                    <td>${{ $item->price }}</td>
                    <td>${{ $order->total }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div>
        <p><strong>Contacto:</strong> {{ $order->contact }}</p>
        <p><strong>Teléfono:</strong> {{ $order->phone }}</p>
        <p><strong>Estado:</strong>
            @switch($order->status)
                @case(1)
                    <span>
                        PENDIENTE
                    </span>
                @break

                @case(2)
                    <span>
                        EL ALMACÉN RECIBIÓ SU ORDEN
                    </span>
                @break

                @case(3)
                    <span>
                        ENVIADO
                    </span>
                @break

                @case(4)
                    <span>
                        ENTREGADO
                    </span>
                @break

                @case(5)
                    <span>
                        ANULADO
                    </span>
                @break

                @default
            @endswitch
        </p>

        <p><strong>Tipo de envío:</strong> {{ $order->envio_type == 1 ? 'Recoger en tienda' : 'Envío s domicilio' }}</p>
        <p><strong>Costo de envío:</strong> ${{ $order->shipping_cost }}</p>
        <p><strong>Total:</strong> ${{ $order->total }}</p>
    </div>

</body>

</html>

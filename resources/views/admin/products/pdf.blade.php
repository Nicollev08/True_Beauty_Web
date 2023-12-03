<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDF PRODUCTOS</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="assets/css/pdf.css">
    <link rel="shortcut icon" href="/IMG/logo.png" type="image/x-icon">

    
</head>

<body>

    <div id="header">
        <img class="logo" src="IMG/logo.png" width="50px" height="50px">
        <div class="text-logo">
            <p>TRUE BEAUTY</p>
        </div>
        <h1 class="text-center">PRODUCTOS</h1>
    </div>
    <br>
    <div class="container">

        <div class="content-container">

            <table class="table table-striped table-bordered pdf-table">
                <thead class="cabecera">
                    <tr>
                        <th>ID</th>
                        <th>SKU</th>
                        <th>NOMBRE</th>
                        <th>DESCRIPCIÓN</th>
                        {{-- <th>IMAGEN</th> --}}
                        <th>PRECIO</th>
                        <th>STOCK</th>
                        <th>ESTADO</th>
                        <th>SUBCATEGORÍA</th>
                    </tr>
                </thead>

                @if ($products->count())

                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <td>{{ $product->id }}</td>
                                <td>{{ $product->sku }}</td>

                                <td>{{ $product->name }}</td>
                                <td>{{ $product->description }}</td>
                                {{-- <td><img src="{{ asset('storage/' . $product->image_path) }}" alt=""
                                    style="max-width: 100px;">
                            </td> --}}
                                <td>{{ $product->price }}</td>
                                <td>{{ $product->quantity }}</td>
                                <td> @switch($product->status)
                                        @case(1)
                                            <span class="text-danger">
                                                Borrador
                                            </span>
                                        @break

                                        @case(2)
                                            <span class="text-success">
                                                Publicado
                                            </span>
                                        @break

                                        @default
                                    @endswitch
                                </td>

                                <td>{{ $product->subcategory->name }}</td>

                            </tr>
                        @endforeach
                    </tbody>
                @else
                    <div>
                        No hay productos registrados
                    </div>

                @endif

            </table>
        </div>
    </div>


    <div id="footer">
        <p class="textFooter">Enamórate de cuidarte, enamórate de tí</p>
    </div>
</body>

</html>

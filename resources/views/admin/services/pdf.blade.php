<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDF SERVICIOS</title>

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
        <h1 class="text-center">SERVICIOS</h1>
    </div>

    <div class="container">

        <div class="content-container">

            <table class="table table-striped table-bordered pdf-table">
                <thead class="cabecera">
                    <tr>
                        <th>ID</th>
                        {{-- <th>IMAGEN</th> --}}
                        <th>NOMBRE</th>
                        <th>DESCRIPCION</th>
                    </tr>
                </thead>

                @if ($services->count())

                    <tbody>
                        @foreach ($services as $service)
                            <tr>
                                <td>{{ $service->id }}</td>
                                {{-- <td><img src="{{ $service->image }}" alt="" width="50px" height="50px"></td> --}}
                                {{-- <td><img src="{{ asset($service->image) }}" alt=""></td> --}}
                                <td>{{ $service->name }}</td>
                                <td>{{ $service->description }}</td>

                            </tr>
                        @endforeach
                    </tbody>
                @else
                    <div>
                        No hay servicios registrados
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

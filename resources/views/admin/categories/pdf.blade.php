<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDF CATEGORÍAS</title>

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
    </div>
    <br>
    <div class="container mt-4">
        <h1 class="text-center">CATEGORÍAS</h1> <br>
        <table class="table table-striped table-bordered">
            <thead class="cabecera">
                <tr>
                    <th>ID</th>
                    <th>NOMBRE</th>
                </tr>
            </thead>

            @if ($categories->count())

                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->name }}</td>

                        </tr>
                    @endforeach
                </tbody>
            @else
                <div>
                    No hay categorías registradas
                </div>

            @endif

        </table>
    </div>


    <div id="footer">
        <p class="textFooter">Enamórate de cuidarte, enamórate de tí</p>
    </div>
</body>

</html>

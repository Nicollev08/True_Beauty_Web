    <!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])


        <!-- Styles -->
        @livewireStyles

        <style>
            body {
                margin: 0;
                font-family: 'figtree', sans-serif;
                overflow: hidden;
            }

            .background {
                background-image: url('{{ asset('IMG/fondo1.jpg') }}');
                background-size: cover;
                background-position: center;
                filter: blur(5px);
                height: 100vh;
                position: absolute;
                width: 100%;
                z-index: -1;
            }

            .content {
                position: relative;
                z-index: 1;
            }
        </style>

    </head>

    <body>

        <div class="background"></div>

        <div class="content font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>

        @livewireScripts
    </body>

    </html>

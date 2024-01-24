<x-app-layout>
   
    <link rel="stylesheet" href="{{ url('assets/css/services.css') }}">

    <div class="container p-20 py-40 w-full">
        <div class="row">
            <div class="section__title2">
                <h1>SERVICIOS</h1>
                <span></span>
            </div>
        </div>
        <br>
        @if (isset($services) && count($services) > 0)

            @foreach ($services as $service)
                <div class="service-item">
                    <div class="services__image"><img src="{{ asset('storage/' . $service->image) }}"></div>
                    <div class="services__texts">
                        <h2 class="services__title">{{ $service->name }}</h2>
                        <p class="services__paragraph">{{ $service->description }}</p>
                        <p>Duración aprox: {{ $service->duration }}</p>
                        <br>
                        <a href="/eventos" class="services__cta">AGENDA AHORA</a>
                    </div>
                </div>
            @endforeach
        @else
            <p class="mt-1 text-sm text-gray-500">No hay más servicios disponibles</p>
        @endif

        <div class="text-center">
        <a href="/"class="opbtn1">REGRESAR</a>
    </div>
    </div>


</x-app-layout>

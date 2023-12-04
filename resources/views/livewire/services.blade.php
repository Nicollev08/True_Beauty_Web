<div class="bg-white">

    <link rel="stylesheet" href="{{ url('assets/css/services.css') }}">


    <section class="servicios">
        @if (isset($services) && count($services) > 0)
            <div class="servicecontent">
                @foreach ($services as $service)
                    <div class="service-item">
                        <div class="services__image"><img src="{{ asset('storage/' . $service->image) }}"></div>
                        <div class="services__texts">
                            <h2 class="services__title">{{ $service->name }}</h2>
                            <p class="services__paragraph">{{ $service->description }}</p>
                            <a href="{{ route('view-services') }}" class="services__cta">Ver más</a>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="text-center">
                <a href="{{ route('view-services') }}"class="opbtn1">VER MÁS</a>
            </div>

        @else
            <p class="mt-1 text-sm text-gray-500">No hay más servicios disponibles</p>
        @endif
    </section>

</div>

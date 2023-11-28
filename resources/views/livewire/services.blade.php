<x-app-layout>
    <!-- SERVICES SECTION -->
    <section class="servicios" id="servicios">
        <div class="servicecontent">
            <div class="row">
                <div class="section__title2">
                    <h1>SERVICIOS</h1>
                    <span></span>
                </div>
            </div>
            <div class="services">
                @foreach ($data as $item)
                    <div>
                        <div class=""><img src="{{ asset('image') }}" alt="Image"></div>

                        <div class="services__texts">
                            <h2 class="services__title">{{ $item->name }}</h2>
                            <p class="services__paragraph">{{ $item->description }}</p>
                        </div>
                    </div>
                @endforeach
                <div class="services__image service__image--2"></div>

                <div class="services__texts services__texts--2">
                    <h2 class="services__title"> PESTAÑAS</h2>
                    <p class="services__paragraph"> Potencia tu mirada con nuestras extensiones de pestañas. 🌟
                        Resalta tu belleza natural con pestañas largas y exuberantes.
                        ¡Haz que tus ojos brillen con cada parpadeo! Reserva tu cita para una mirada
                        cautivadora. ✨
                    </p>
                </div>

                <div class="services__image service__image--3" id="imgservice"></div>

                <div class="services__texts services__texts--3">
                    <h2 class="services__title" id="nameservice"> CUIDADO FACIAL</h2>
                    <p class="services__paragraph" id="descripcionservice"> Regálate un momento de lujo para
                        tu
                        piel. ✨
                        Descubre la pureza y frescura con nuestros tratamientos de cuidado facial.
                        Deja que tu piel respire y brille con una limpieza profunda.
                        Reserva tu sesión para revitalizar tu piel y resaltar tu belleza natural. 💆‍♀️✨</p>
                </div>

                <div class="services__image service__image--4"></div>

                <div class="services__texts services__texts--4">
                    <h2 class="services__title"> MAQUILLAJE</h2>
                    <p class="services__paragraph"> ¡Resalta tu belleza con nuestro arte del maquillaje! 💄
                        Descubre looks irresistibles y radiantes que resaltan lo mejor de ti.
                        Desde maquillaje natural hasta looks audaces, estamos aquí para realzar tu confianza.
                        Reserva tu sesión y déjanos crear magia en tu rostro. ✨ </p>
                </div>

            </div>
            <a href="/" class="opbtn1">REGRESAR</a>
        </div>



    </section>
</x-app-layout>

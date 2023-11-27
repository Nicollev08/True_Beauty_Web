<x-app-layout>

    <body>

        <!--MENU-->

        <!-- MAIN CONTENT -->
        <main>


            <!-- HOME SECTION -->

            <section class="home" id="home">
                <div class="content">
                    <h1><b>TRUE BEAUTY</b></h1>
                    <br>
                    <p>Enamórate de cuidarte</p>
                    <p>Enamórate de ti.</p>

                    <a href="/eventos" class="agendar"><i class="fa-solid fa-calendar-days"></i> Agendar cita </a>
                </div>
            </section>

            {{-- @livewire('home.category-product') --}}

            <!--TIPS-->
            <section class="tips" id="tips">

                <div class="row">
                    <div class="section__title2">
                        <h1>TIPS DE BELLEZA</h1>
                        <span></span>
                    </div>
                </div>

                <div class="contip">

                    <div class="tipcontainer">
                        <div class="tip">
                            <div class="imgBx">
                                <img src="/IMG/tip1.jpg" alt="">
                            </div>
                            <div class="content">
                                <h2><b>Hidrata tu rostro antes del maquillaje</b></h2>
                                <p>Si quieres un maquillaje perfecto, pasa un hielo de zumo de pepino con sábila por el
                                    rostro y el cuello.
                                    Esto dejará la piel tersa para poder poner cualquier producto de belleza.</p>
                            </div>
                        </div>
                        <div class="tip">
                            <div class="imgBx">
                                <img src="/IMG/tip2.jpg" alt="">
                            </div>
                            <div class="content">
                                <h2><b>Cepilla tu cabello con cerdas naturales</b></h2>
                                <p>Usa cepillos con cerdas naturales. Son muy comunes las cerdas de jabalí, pues el
                                    cabello
                                    no produce el frizz que producen las cerdas plásticas. Además, la grasa natural del
                                    cabello se distribuye de manera uniforme por toda la cabellera.</p>
                            </div>
                        </div>
                        <div class="tip">
                            <div class="imgBx">
                                <img src="/IMG/tip3.jpg" alt="">
                            </div>
                            <div class="content">
                                <h2> <b>Agua fría para el cabello</b></h2>
                                <p>Si quieres evitar la caída de tu cabello y prevenir la resequedad, además de utilizar
                                    tratamientos anticaída, también debes enjuaga tu pelo después del lavado con agua
                                    fría,
                                    sobre todo si tu pelo es fino. El agua fría promueve más el brillo una vez secado.
                                </p>
                            </div>
                        </div>

                    </div>
                    <div class="tipcontainer">
                        <div class="tip">
                            <div class="imgBx">
                                <img src="/IMG/tip4.jpg" alt="">
                            </div>
                            <div class="content">
                                <h2><b>Desinflama tus párpados</b></h2>
                                <p>Necesitas lucir perfecta después de una noche de fiesta o simplemente después de
                                    dormir
                                    un largo tiempo. Envuelve un trozo de hielo con una toalla y ponlo sobre el área
                                    inflamada de los ojos. En unos minutos comenzará a reducirse el tamaño.</p>
                            </div>
                        </div>
                        <div class="tip">
                            <div class="imgBx">
                                <img src="/IMG/tip5.jpg" alt="">
                            </div>
                            <div class="content">
                                <h2><b>Talco para el exceso de grasa en el cabello</b></h2>
                                <p>Para mejorar un cabello visiblemente graso, usa talco. Muchas veces alguna urgencia
                                    impide lavar el cabello con tiempo. Si es tu caso, aplica un poco de talco a las
                                    cerdas
                                    de tu cepillo y péinalo hasta quitar el exceso.</p>
                            </div>
                        </div>
                        <div class="tip">
                            <div class="imgBx">
                                <img src="/IMG/tip6.jpg" alt="">
                            </div>
                            <div class="content">
                                <h2><b>Uñas siempre fuertes y limpias</b></h2>
                                <p>Las uñas son la carta de presentación de las manos. Por eso deben lucir limpias y
                                    sanas.
                                    Aplica limón antes de dormir, tus uñas estarán siempre limpias y fuertes para los
                                    días
                                    en que prefieras lucirlas al natural.</p>
                            </div>
                        </div>

                    </div>
                    <a href="/tips"class="opbtn1">VER MÁS</a>
                </div>

            </section>

            <!-- ABOUT  SECTION -->
            <section class="about" id="about">
                <div class="about__content">
                    <div class="row">
                        <div class="section__title2">
                            <h1>¿QUIÉNES SOMOS?</h1>
                            <span></span>
                        </div>
                    </div>
                    <div class="about__container container">
                        <img src="/IMG/leftarrow.svg" class="about__arrow" id="before">

                        <section class="about__body about__body--show" data-id="1">
                            <div class="about__texts">
                                <h2 class="subtitle">Mi nombre es Laura Vidal, <span class="about__course">estudiante de
                                        ADSO.</span></h2>
                                <p class="about__review">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut
                                    est
                                    esse, asperiores eaque totam nulla repudiandae quasi, deserunt culpa exercitationem
                                    blanditiis laborum veniam laboriosam saepe reiciendis dolorem. Cum, ratione
                                    voluptatum!
                                </p>
                            </div>

                            <figure class="about__picture">
                                <img src="/IMG/laura.jpg" class="about__img">
                            </figure>
                        </section>

                        <section class="about__body" data-id="2">
                            <div class="about__texts">
                                <h2 class="subtitle">Mi nombre es Nicole García, <span class="about__course">estudiante
                                        de
                                        ADSO.</span></h2>
                                <p class="about__review">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut
                                    est
                                    esse, asperiores eaque laborum veniam laboriosam saepe reiciendis dolorem. Cum,
                                    ratione
                                    voluptatum!</p>
                            </div>

                            <figure class="about__picture">
                                <img src="/IMG/nicole.jpg" class="about__img">
                            </figure>
                        </section>

                        <section class="about__body" data-id="3">
                            <div class="about__texts">
                                <h2 class="subtitle">Mi nombre es Alejandro Suárez, <span
                                        class="about__course">estudiante
                                        de
                                        ADSO.</span></h2>
                                <p class="about__review">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut
                                    est
                                    esse, niam laboriosam saepe reiciendis dolorem. Cum, ratione voluptatum!</p>
                            </div>

                            <figure class="about__picture">
                                <img src="/IMG/alejo.jpg" class="about__img">
                            </figure>
                        </section>

                        <section class="about__body" data-id="4">
                            <div class="about__texts">
                                <h2 class="subtitle">Mi nombre es Mauricio Campos, <span
                                        class="about__course">estudiante
                                        de
                                        ADSO.</span></h2>
                                <p class="about__review">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut
                                    est
                                    esse, niam laboriosam saepe reiciendis dolorem. Cum, ratione voluptatum!</p>
                            </div>

                            <figure class="about__picture">
                                <img src="/IMG/mauricio.jpg" class="about__img">
                            </figure>
                        </section>

                        <img src="/IMG/rightarrow.svg" class="about__arrow" id="next">
                    </div>
                </div>
            </section>

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

                        <div class="services__image service__image--1"></div>

                        <div class="services__texts">
                            <h2 class="services__title"> MANICURE</h2>
                            <p class="services__paragraph"> Dale un toque de estilo a tus manos! 💅
                                Descubre la magia de nuestras manicuras profesionales.
                                Colores vibrantes, diseños elegantes y un cuidado impecable para tus uñas.
                                Reserva tu cita y deja que tus manos hablen por ti. </p>
                            <a href="#" class="services__cta">Ver más</a>
                        </div>

                        <div class="services__image service__image--2"></div>

                        <div class="services__texts services__texts--2">
                            <h2 class="services__title"> PESTAÑAS</h2>
                            <p class="services__paragraph"> Potencia tu mirada con nuestras extensiones de pestañas. 🌟
                                Resalta tu belleza natural con pestañas largas y exuberantes.
                                ¡Haz que tus ojos brillen con cada parpadeo! Reserva tu cita para una mirada
                                cautivadora. ✨
                            </p>
                            <a href="#" class="services__cta">Ver más</a>
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
                            <a href="#" class="services__cta">Ver más</a>
                        </div>

                        <div class="services__image service__image--4"></div>

                        <div class="services__texts services__texts--4">
                            <h2 class="services__title"> MAQUILLAJE</h2>
                            <p class="services__paragraph"> ¡Resalta tu belleza con nuestro arte del maquillaje! 💄
                                Descubre looks irresistibles y radiantes que resaltan lo mejor de ti.
                                Desde maquillaje natural hasta looks audaces, estamos aquí para realzar tu confianza.
                                Reserva tu sesión y déjanos crear magia en tu rostro. ✨ </p>
                            <a href="#" class="services__cta">Ver más</a>
                        </div>

                    </div>
                    <a href="/services"class="opbtn1">VER MÁS</a>
                </div>

            </section>


            <br>
            <br>
            <section id="products" class="">
                <div class="row">
                    <div class="section__title2">
                        <h1>PRODUCTOS</h1>
                        <span>Todo lo mejor para tí</span>
                    </div>
                </div>
                <br>

                <section class="">
                    @livewire('home.slider-products')

                </section>
            </section>
            <br>
            <br>



            <!-- TESTIMONIALS SECTION -->
            <section class="testimonials section centered" id="testimonios">
                <div class="row">
                    <div class="section__title2">
                        <h1>TESTIMONIOS</h1>
                        <span>Vea lo que nuestros clientes tienen que decir</span>
                    </div>
                </div>

                <div class="testimonials__content">

                    <div class="testimonials__card container grid">
                        <div class="testimonials__item flex">
                            <div class="testimonials__img">
                                <img src="/IMG/mujer1.jpg" alt="">
                            </div>
                            <div class="testimonials__box">
                                <div class="testimonials__name">
                                    <h1>Julieta</h1>
                                    <i class='bx bxs-star star__icon'></i>
                                    <i class='bx bxs-star star__icon'></i>
                                    <i class='bx bxs-star star__icon'></i>
                                    <i class='bx bxs-star star__icon'></i>
                                    <i class='bx bxs-star star__icon'></i>
                                </div>
                                <div class="testimonials__descripition">
                                    <p>"Poseen tratamientos de alta calidad.
                                        Una experiencia de belleza y relajación inigualable."</p>
                                </div>
                            </div>
                        </div>
                        <div class="testimonials__item flex">
                            <div class="testimonials__img">
                                <img src="/IMG/hombre1.jpg" alt="">
                            </div>
                            <div class="testimonials__box">
                                <div class="testimonials__name">
                                    <h1>Marcus</h1>
                                    <i class='bx bxs-star star__icon'></i>
                                    <i class='bx bxs-star star__icon'></i>
                                    <i class='bx bxs-star star__icon'></i>
                                    <i class='bx bxs-star star__icon'></i>
                                    <i class='bx bxs-star star__icon'></i>
                                </div>
                                <div class="testimonials__descripition">
                                    <p>"El centro de belleza es simplemente encantador,
                                        ¡Una experiencia que siempre deja una impresión positiva!"</p>
                                </div>
                            </div>
                        </div>
                        <div class="testimonials__item flex">
                            <div class="testimonials__img">
                                <img src="/IMG/hombre2.jpg" alt="">
                            </div>
                            <div class="testimonials__box">
                                <div class="testimonials__name">
                                    <h1>Samuel</h1>
                                    <i class='bx bxs-star star__icon'></i>
                                    <i class='bx bxs-star star__icon'></i>
                                    <i class='bx bxs-star star__icon'></i>
                                    <i class='bx bxs-star star__icon'></i>
                                    <i class='bx bxs-star star__icon'></i>
                                </div>
                                <div class="testimonials__descripition">
                                    <p>"Este centro de belleza es un oasis de elegancia y cuidado.
                                        Ideal para quienes buscan lo mejor en cuidado y bienestar."</p>
                                </div>
                            </div>
                        </div>
                        <div class="testimonials__item flex">
                            <div class="testimonials__img">
                                <img src="/IMG/mujer2.jpg" alt="">
                            </div>
                            <div class="testimonials__box">
                                <div class="testimonials__name">
                                    <h1>Vero</h1>
                                    <i class='bx bxs-star star__icon'></i>
                                    <i class='bx bxs-star star__icon'></i>
                                    <i class='bx bxs-star star__icon'></i>
                                    <i class='bx bxs-star star__icon'></i>
                                    <i class='bx bxs-star star__icon'></i>
                                </div>
                                <div class="testimonials__descripition">
                                    <p>"En un destino ideal para consentirse. Lo amé mucho
                                        ¡Una joya en el mundo del bienestar!"</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="/opiniones"class="opbtn">VER MÁS</a>
                </div>

            </section>
        </main>

        <!--GOOGLE MAPS-->
        <section>
            <iframe class="map"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63778.38371264201!2d-76.64113390351599!3d2.4574700696484055!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e300311c028d47d%3A0x880bd67f0987a54e!2zUG9wYXnDoW4sIENhdWNh!5e0!3m2!1ses!2sco!4v1694665767523!5m2!1ses!2sco"
                width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </section>


        <!-- FOOTER -->
        <footer class="footer" id="redes">
            <div class="footer__list section container grid">
                <div class="footer__data">
                    <h1>TRUE BEAUTY</h1>
                    <div class="footer__data-social">
                        <a href="https://web.facebook.com/"><i class='bx bxl-facebook social__icon'></i></a>
                        <a href="https://www.instagram.com/"><i class='bx bxl-instagram social__icon'></i></a>
                        <a href="https://web.whatsapp.com/"><i class='bx bxl-whatsapp social__icon'></i></a>
                    </div>
                </div>
                <div class="footer__data">
                    <h2>Dirección</h2>
                    <p>El recuerdo <br> Calle 11b #23-44</p>
                </div>
                <div class="footer__data">
                    <h2>Horario</h2>
                    <p>Lunes a sábado<br>07:00 am a 07:00 pm</p>
                </div>
                <div class="footer__data">
                    <h2>Contacto</h2>
                    <p>(+57) 323-446-41-53</p>
                    <p>(+57) 314-759-48-42</p>
                </div>
            </div>
            <div class="copy">
                <p>Todos los derechos son reservados</p>
                <span>ADSO MOR</span>
            </div>
        </footer>
        <!-- JavaScript -->
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

        <script src="JS/index.js"></script>

        {{-- <script src="JS/products.js"></script>  --}}

    </body>


</x-app-layout>

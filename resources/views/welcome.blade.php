<x-app-layout>

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>

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
                <br>

                @livewire('tips')

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
                            <audio controls>
                                <source src="{{ asset('AUDIO/Laura.m4a') }}" type="audio/mp4">
                                Tu navegador no soporta el elemento de audio.
                            </audio>
                            <div></div>
                            
                            <div class="about__texts">
                                
                                
                                <h2 class="subtitle">Mi nombre es Laura Vidal, <span class="about__course">Estudiante de
                                        ADSO.</span></h2>
                                <p class="about__review">

                                    <b>MISIÓN</b>

                                    En True Beauty, nos dedicamos a ser el puente perfecto entre la belleza que sueñas y
                                    la realidad que mereces. Nuestra misión es simplificar tu vida, ofreciéndote un
                                    sistema de información diseñado para cubrir todas tus necesidades de belleza.
                                    Facilitamos la agenda de citas para los servicios de cualquier centro de belleza y
                                    la promoción de su catálogo de 
                                    productos, todo ello pensado para los amantes del cuidado facial y la estética
                                    personal.
                                </p>
                            </div>

                            <figure class="about__picture">
                                <img src="/IMG/laura.jpg" class="about__img">
                            </figure>
                        </section>

                        <section class="about__body" data-id="2">
                            <audio controls>
                                <source src="{{ asset('AUDIO/Nicole.m4a') }}" type="audio/mp4">
                                Tu navegador no soporta el elemento de audio.
                            </audio>
                            <div></div>
                            <div class="about__texts">
                                <h2 class="subtitle">Mi nombre es Nicole García, <span class="about__course">Estudiante
                                        de
                                        ADSO.</span></h2>
                                <p class="about__review">

                                    <b>VISIÓN</b>
                                    Para el año 2024 los usuarios podrán hacer uso de nuestro sistema de información
                                    compuesto por un aplicativo web y móvil, que será distinguido por facilitar a
                                    cualquier centro de belleza la promoción de sus productos y
                                    servicios, Nos esforzamos por ser pioneros en marketing digital, creando un
                                    ecosistema donde la belleza y la innovación se fusionan para ofrecer experiencias
                                    inolvidables.
                                </p>
                            </div>

                            <figure class="about__picture">
                                <img src="/IMG/nicole.jpg" class="about__img">
                            </figure>
                        </section>

                        <section class="about__body" data-id="3">
                            <audio controls>
                                <source src="{{ asset('AUDIO/Alejo.m4a') }}" type="audio/mp4">
                                Tu navegador no soporta el elemento de audio.
                            </audio>
                            <div></div>
                            <div class="about__texts">
                                <h2 class="subtitle">Mi nombre es Alejandro Suárez, <span
                                        class="about__course">Estudiante
                                        de
                                        ADSO.</span></h2>
                                <p class="about__review">
                                    Gracias a las avanzadas tecnologías de hoy en día, hemos logrado dar vida a este
                                    emocionante proyecto. La innovación digital ha sido nuestra aliada, permitiéndonos
                                    materializar ideas y crear soluciones únicas. </p>
                            </div>

                            <figure class="about__picture">
                                <img src="/IMG/alejo.jpg" class="about__img">
                            </figure>
                        </section>

                        <section class="about__body" data-id="4">
                            <audio controls>
                                <source src="{{ asset('AUDIO/Mauricio.m4a') }}" type="audio/mp4">
                                Tu navegador no soporta el elemento de audio.
                            </audio>
                            <div></div>
                            <div class="about__texts">
                                <h2 class="subtitle">Mi nombre es Mauricio Campos, <span
                                        class="about__course">Estudiante
                                        de
                                        ADSO.</span></h2>
                                <p class="about__review">Esperamos sinceramente que este proyecto sea de su agrado.
                                    Hemos dedicado tiempo y esfuerzo para crear una experiencia que refleje nuestro
                                    compromiso con la excelencia. Agradecemos su atención y confianza en nuestro
                                    trabajo.</p>
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


                <div class="row">
                    <div class="section__title2">
                        <h1>SERVICIOS</h1>
                        <span></span>
                    </div>
                </div>
                @livewire('services')

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



            <section>

                <div class="row">
                    <div class="section__title2">
                        <h1>TESTIMONIOS</h1>
                        <span>Vea lo que nuestros clientes tienen que decir</span>
                    </div>
                </div>

                @livewire('comments')

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
                <span>SENA - CENTRO DE COMERCIO Y SERVICIOS</span>
            </div>
        </footer>
        <!-- JavaScript -->
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

        <script src="JS/index.js"></script>

    </body>


</x-app-layout>

<div class="min-h-screen flex flex-col sm:flex-row justify-center items-center pt-6 sm:pt-0">
    <!-- Contenedor del formulario y la imagen -->
    <div class="flex flex-col sm:flex-row w-full h-auto justify-center">
        <!-- Formulario y contenido principal -->
        <div
            class="bg-slate-100 bg-opacity-80 rounded-md p-8 shadow-md overflow-hidden w-full sm:max-w-md flex flex-col justify-center items-center">
            <div class="flex flex-col items-center">
                {{ $logo }}
            </div>

            <div class="w-full mt-4 px-6 py-2 shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>

        <style>
            /* Estilo para la animación */
            @keyframes slideIn {
                from {
                    transform: translateX(-100%);
                }

                to {
                    transform: translateX(0%);
                }
            }

            /* Aplica la animación a la imagen */
            .animated-image {
                animation: slideIn 1s ease-in-out;
            }
        </style>

        <div class="w-full sm:max-w-md flex justify-end items-center">
            <img class="w-full h-auto max-h-auto object-cover animated-image" src="{{ asset('IMG/mujer7.jpeg') }}"
                alt="">
        </div>
        
    </div>
</div>

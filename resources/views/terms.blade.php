<x-guest-layout>
    <div class="pt-4 bg-gray-100 ">
        <div class="min-h-screen flex flex-col items-center pt-6 sm:pt-0 ">
            <div>
                <x-authentication-card-logo />
            </div>
            <style>
                body{
                    overflow-y: auto;
                }
            </style>

            <div class="content font-sans text-gray-900 antialiased overflow-y-hidden">

                <div class="w-full sm:max-w-5xl mt-6 p-6 bg-white shadow-md overflow-hidden sm:rounded-lg prose">
                    {{-- {!! $terms !!} --}}
                    <h1 class="text-center">TÉRMINOS Y CONDICIONES</h1>

                    <h2>1. Uso de la Aplicación</h2>
                    <p>Al utilizar nuestra aplicación de cosmética ("TRUE-BEAUTY"), aceptas cumplir con los presentes
                        Términos de Servicio. La aplicación tiene como objetivo principal proporcionar información sobre
                        productos de belleza, permitir la compra de productos y facilitar la reserva de citas para
                        servicios
                        de belleza.</p>
                    <h2>2. Compra de Productos</h2>
                    <p>2.1. Productos y Descripciones: Nos esforzamos por mostrar información precisa sobre nuestros
                        productos, incluyendo descripciones detalladas y precios. Sin embargo, nos reservamos el derecho
                        de
                        corregir cualquier error en la información sin previo aviso.

                        2.2. Pedidos y Pago: Al realizar una compra a través de la Aplicación, aceptas proporcionar
                        información precisa de pago. Nos reservamos el derecho de rechazar o cancelar pedidos en
                        cualquier
                        momento por razones como disponibilidad de productos, errores en la información del producto o
                        problemas con el pago.</p>
                    <h2>3. Reserva de Citas</h2>
                    <p>3.1. Servicios de Belleza: La Aplicación permite a los usuarios reservar citas para servicios de
                        belleza ofrecidos por nuestros socios. La disponibilidad de citas está sujeta a la programación
                        de
                        los proveedores de servicios.

                        3.2. Cancelaciones y Cambios: Si necesitas cambiar o cancelar una cita, te pedimos que lo hagas
                        con
                        la mayor antelación posible. Las políticas de cancelación y cambios pueden variar según el
                        proveedor
                        de servicios y se indicarán claramente durante el proceso de reserva.</p>
                    <h2>4. Privacidad y Seguridad</h2>
                    <p>4.1. Información del Usuario: Al utilizar la Aplicación, aceptas nuestra Política de Privacidad,
                        que
                        describe cómo recopilamos, utilizamos y compartimos tu información.

                        4.2. Seguridad: Nos comprometemos a tomar medidas razonables para proteger la información del
                        usuario. Sin embargo, no podemos garantizar la seguridad absoluta de la información transmitida
                        a
                        través de la Aplicación.</p>
                    <h2>5. Modificaciones a los Términos de Servicio</h2>
                    <p>Nos reservamos el derecho de actualizar o modificar estos Términos de Servicio en cualquier
                        momento.
                        Te notificaremos sobre cambios significativos mediante notificaciones en la aplicación o por
                        otros
                        medios.</p>
                    <span>Al utilizar la Aplicación, aceptas estos Términos de Servicio. Si no estás de acuerdo con
                        alguna parte de estos términos, te pedimos que dejes de usar la aplicación.</span>

                </div>
            </div>
        </div>
    </div>
</x-guest-layout>

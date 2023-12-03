<div class="">
    <section>
        <div class="carrusel">
            @if ($products->count() > 0)
                <div class="slider product-slider" id="product-slider{{ $category->id }}">

                    @foreach ($products as $product)
                        <div class="item">
                            <div class="box">
                                <div class="slider-img">
                                    <img alt="1" src="{{ asset('storage/' . $product->image_path) }}">
                                    <div class="overlyy">
                                        <a href="{{ route('products.show', ['product' => $product->id]) }}"
                                            class="buy-btn">Comprar ahora</a>

                                    </div>
                                </div>
                                <div class="detail-box text-center justify-center items-center">
                                    <div class="type">
                                        <a
                                            href="{{ route('products.show', ['product' => $product->id]) }}">{{ $product->name }}</a>
                                        <span>Disponible</span>
                                    </div>

                                    <a href="#" class="price mr-5">${{ $product->price }}</a>

                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <!-- Botones de desplazamiento -->
                <button class="slick-prev" id="prevButton"><i class="fas fa-chevron-left"></i></button>
                <button class="slick-next" id="nextButton"><i class="fas fa-chevron-right"></i></button>
            @else
                <p class="text-center">No hay productos disponibles para esta categoría {{ $category->name }}.</p>
            @endif
        </div>


        <script>
            $(document).ready(function() {
                // Initialize the slider for each category
                $('#product-slider{{ $category->id }}').slick({
                    infinite: true,
                    slidesToShow: 7,
                    slidesToScroll: 1,
                });
            });
        </script>
        
    </section>
   
</div>

<div>
    <section class="slider">

        <ul id="lightSlider" class="cs-hidden">
            @foreach ($products as $product)
                <li class="item-a">

                    <div class="box">
                        <div class="slide-img">
                            <img alt="1" src="{{ asset('storage/' . $product->image_path) }}">

                            <div class="overlay">

                                <a href="#" class="buy-btn">Comprar ahora</a>
                            </div>
                        </div>

                        <div class="detail-box">

                            <div class="type">
                                <a href="#">{{ $product->name }}</a>
                                <span>Noe Arrival</span>
                            </div>

                            <a href="#" class="price">${{ $product->price }}</a>

                        </div>

                    </div>
                </li>
            @endforeach
        </ul>

    </section>
</div>

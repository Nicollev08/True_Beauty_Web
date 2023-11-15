<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="/IMG/logo.png" type="image/x-icon">
    <title>Productoa</title>
    

    @livewireStyles
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    <section class="products">

        @livewire('product-navigation')
        <br>

        <div class="row">

            <div class="section__title2">
                <h1>PRODUCTOS</h1>
                <span></span>
            </div>
        </div>
        <div class="productscontent">
            <div class="all-products">
                @foreach ($products as $product)
                    <div class="product">
                        <img src="/IMG/cremafacial.jpg">
                        <div class="product-info">
                            <h4 class="product-title">{{ $product->name }}</h4>
                            <p class="product-price">{{ $product->price }}</p>
                            <a class="product-btn" href="#">Descripción</a>

                        </div>
                    </div>
                @endforeach



            </div>
            <a href="/productos"class="opbtn2">VER MÁS</a>
        </div>

    </section>

    <script src="JS/index.js"></script>
</body>

</html>

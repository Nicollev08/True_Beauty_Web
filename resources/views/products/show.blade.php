@extends('layouts.menu')


@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <div class="container p-28 mx-auto my-8">
        <div class="flex">
            <div class="w-2/6 pr-8">
                <div class="bg-white p-8 rounded-lg shadow mb-8 text-center">
                    <h1 class="text-3xl font-semibold mb-4">{{ $product->name }}</h1>

                    <div class="mb-4">
                        <img src="{{ Storage::url($product->image_path) }}" class="w-80 h-80 rounded-lg shadow mx-auto">
                    </div>

                    <p class="text-gray-700">{{ $product->description }}</p>

                    <p class="mt-4 text-xl text-center font-bold text-pink-500">US$ {{ $product->price }}</p>

                </div>

            </div>

            <div>
                <h1 class="text-xl font-bold text-trueGray-700">{{ $product->name }}</h1>

                <div class="flex">
                    <p class="">Disponible</p>
                    <p class="text-trueGray-700 mx-6">5 <i class="fas fa-star text-sm text-yellow-400"></i></p>
                    <a class="text-pink-600 hover:text-pink-400 underline" href="#">39 reseñas</a>
                </div>

                <p class="text-2xl font-semibold text-trueGray-700 my-4">USD {{ $product->price }}</p>

                <div class="bg-white rounded-lg shadow-lg mb-6">
                    <div class="p-4 flex items-center">
                        <span class="flex items-center justify-center h-10 w-10 rounded-full bg-blue-400">
                            <i class="fa solid fa-truck text-sm text-white"></i>
                        </span>

                        <div class="ml-4">
                            <p class="text-lg font-semibold text-blue-500">Se hace envíos a todo Popayán</p>
                            <p>Recíbelo el {{ now()->addDay(7)->locale('es')->format('l j F') }}</p>
                        </div>
                    </div>
                </div>
                <x-button>Añadir al carro de compras</x-button>
            </div>
        </div>



    </div>
@endsection

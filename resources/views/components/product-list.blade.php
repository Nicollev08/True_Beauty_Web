@props(['product'])

<li class="bg-white rounded-lg shadow mb-4">
    <article class="md:flex">
        <figure>
            <img class="h-48 w-full md:w-56 object-cover object-center" src="{{ Storage::url($product->image_path) }}"
                alt="">
        </figure>

        <div class="py-6 px-8 flex flex-col justify-start">
            <div class="lg:flex justify-start">
                <div class="flex-col justify-start w-64">
                    <h1 class="text-lg font-semibold text-gray-700 text-center">{{ $product->name }}</h1>
                    <p class="font-bold text-gray-700 text-center py-2">$ {{ $product->price }}</p>
                </div>


            </div>

            <div class="mt-2 md:mt-auto mb-4">
                <x-danger-enlace href="{{ route('products.show', $product) }}">
                    Más información
                </x-danger-enlace>
            </div>
        </div>
        <div class="justify-end items-end left-36">
            <div class="flex items-start p-6 left-56 justify-end pl-32 ">
                <ul class="flex text-sm pl-10 justify-end">
                    @for ($i = 0; $i < 5; $i++)
                        <li>
                            <i class="fas fa-star text-yellow-400 mr-1"></i>
                        </li>
                    @endfor
                </ul>

                <span class="text-gray-700 text-sm ml-1">(24)</span>
            </div>
        </div>
    </article>
</li>

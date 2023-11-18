<div>
    <section>
        <div class="slider">
            <div>
                @foreach ($categories as $category)
                    <section class=" container py-4 mb-24">
                        <div class="flex items-center mb-2">
                            <h1 class="text-lg uppercase font-semibold text-gray-700">
                                {{ $category->name }}
                            </h1>
                            <a href="{{ route('categories.show', $category) }}"
                                class="text-pink-500 hover:text-pink-400 hover:underline ml-2 font-semibold">Ver
                                más</a>
                        </div>

                        {{-- Paso el parámetro $category al componente category-products --}}
                        @livewire('home.category-products', ['category' => $category])
                    </section>

                @endforeach
            </div>
        </div>
    </section>

</div>

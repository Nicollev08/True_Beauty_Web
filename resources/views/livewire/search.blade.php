<div class="flex-1 relative" x-data>

    <form action="{{ route('search') }}" autocomplete="off">
        <x-input wire:model.live="search" name="name" type="text" class="w-full text-center" placeholder="¿Estás buscando algún producto?" />
        <button class="absolute top-0 right-0 w-16 h-11 bg-pink-400 flex items-center justify-center rounded-r-md">
            <x-search color="black" />
        </button>
    </form>

    <div class="absolute w-full mt-1 hidden z-50" :class="{ 'hidden': !$wire.open }" @click.away="$wire.open = false">
        <div class="bg-white rounded-lg shadow-lg">
            <div class="px-4 py-3 space-y-1">
                @forelse ($products as $product)
                    <a href="{{ route('products.show', $product) }}" class="flex items-start"> <!-- Cambio aquí -->
                        <img class="w-16 h-12 object-cover" src="{{ Storage::url($product->image_path)}}" alt="">
                        <div class="ml-4 text-gray-700">
                            <p class="text-lg font-semibold leading-5">{{ $product->name }}</p>
                            <p>Categoria: {{ $product->subcategory->category->name }}</p>
                        </div>
                    </a>
                @empty
                    <p class="text-lg leading-5">
                        No existe ningún registro con los parametros especificados
                    </p>
                @endforelse
            </div>
        </div>
    </div>
</div>

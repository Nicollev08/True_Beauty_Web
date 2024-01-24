<div class="flex-1 relative" x-data>

    <form action="{{ route('search') }}" autocomplete="off">

        <x-input name="name" wire:model.live="search" type="text" class="w-full text-center"
            placeholder="¿Estás buscando algún producto?" />

        <button class="absolute top-0 right-0 w-12 h-full bg-pink-500 flex items-center justify-center rounded-r-md">
            <x-search size="35" color="white" />
        </button>

    </form>

    <div class="absolute w-full mt-1 hidden z-50" :class="{ 'hidden': !$wire.open }" @click.away="$wire.open = false">
        <div class="bg-white rounded-lg shadow-lg">
            <div class="px-4 py-3 space-y-1">
                @forelse ($products as $product)
                    <a href="{{ route('products.show', $product) }}" class="flex mb-2">
                        <img class="w-16 h-12 object-cover" src="{{ Storage::url($product->image_path) }}" alt="">
                        <div class=" ml-2 text-gray-700">
                            <p class="font-semibold">{{ $product->name }}</p>
                            <p>Categoria: {{ $product->subcategory->category->name }}</p>
                        </div>
                    </a>
                @empty
                    <p class="text-lg leading-5">
                        No existe ningún registro con los parámetros especificados
                    </p>
                @endforelse
            </div>
        </div>
    </div>
</div>

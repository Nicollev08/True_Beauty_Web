<x-app-layout>

    <div class="container py-36 p-20 w-full max-w-screen-xl mx-auto">
        <ul>
            @forelse($products as $product)
                <div>
                    <x-product-list :product="$product" />
                </div>


            @empty

                <li class="bg-white rounded-lg shadow-2xl">
                    <div class="p-4">
                        <p class="text-lg font-semibold text-gray-700">
                            Ningún producto coinide con esos parametros
                        </p>
                    </div>
                </li>
            @endforelse
        </ul>

        <div class="mt-4">
            {{ $products->links() }}
        </div>
    </div>
</x-app-layout>

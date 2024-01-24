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

    <style>
        html {
            overflow-y: visible;
            overflow-x: hidden;
        }

        body {
            background-color: var(--white-color);
            font-size: var(--normal-font-size);
            font-family: var(--body-font);

            overflow-y: visible;
            overflow-x: hidden;
        }
    </style>
</x-app-layout>

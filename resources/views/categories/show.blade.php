<x-app-layout>
    <div class="container p-20 py-10 w-full max-w-screen mx-auto">
        <figure class="mb-4">
            <img class="w-full h-36 object-cover object-center bg-pink-400" alt="">
        </figure>

        @livewire('home.category-filter', ['category' => $category])

    </div>
</x-app-layout>

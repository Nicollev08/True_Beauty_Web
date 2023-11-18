@extends('layouts.menu')

<div class="container p-20 py-10">
    <figure class="mb-4">
        <img class="w-full h-56 object-cover object-center bg-pink-400"  alt="">
    </figure>

    @livewire('home.category-filter', ['category' => $category])

</div>

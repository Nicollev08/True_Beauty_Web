@props(['color' => 'pink'])

<a {{ $attributes->merge(['type' => 'button', 'class' => "inline-flex justify-center items-center px-4 py-2 bg-$color-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-$color-400 active:bg-$color-400 focus:outline-none focus:border-$color-400 focus:shadow-outline-$color disabled:opacity-25 transition"]) }}>
    {{ $slot }}
</a>
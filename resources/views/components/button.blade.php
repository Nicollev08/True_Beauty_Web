<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-pink-500 border rounded-md font-semibold text-xs text-black uppercase tracking-widest hover:bg-pink-400 focus:bg-pink-400 active:bg-pink-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>

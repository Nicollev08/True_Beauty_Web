@if(session('flash.banner'))
    <x-banner />
@endif
<header action="/index" class="header">
    @csrf
    <a href="/" class="logo">
        <img src="/IMG/logo.png" alt="">

    </a>

    <nav class="navbar navbar-default">

        <a class="names" style="text-decoration:none" href="{{ url('/') }}">Inicio</a>
        <a class="names" style="text-decoration:none" href="{{ url('/') }}#tips">Tips</a>
        <a class="names" style="text-decoration:none" href="{{ url('/') }}#servicios">Servicios</a>
        <a class="names" style="text-decoration:none" href="{{ url('/') }}#products">Productos</a>
        <a class="names" style="text-decoration:none" href="{{ url('/eventos') }}">Agenda</a>
        <a class="names" style="text-decoration:none" href="{{ url('/') }}#redes">Redes</a>

        @guest
            <div class="ml-3 relative">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <i class="fa-regular fa-circle-user cursor-pointer w-6 text-4xl"></i>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link href="{{ route('login') }}">
                            {{ __('Iniciar sesión') }}
                        </x-dropdown-link>

                        <x-dropdown-link href="{{ route('register') }}">
                            {{ __('Registrarse') }}
                        </x-dropdown-link>
                    </x-slot>

                </x-dropdown>
            </div>

        @endguest

        {{-- <a href="#" title="carrito"><i class="fa-solid fa-cart-shopping" style="color: #fcfcfd;"></i></a> --}}

        <div class="hidden pl-10 md:block">
            @livewire('dropdown-cart')
        </div>

        @auth

            <div class="ml-3 relative pl-10">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                            <button
                                class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                @if (Auth::user()->profile_photo_path)
                                    <img class="rounded-full h-12 w-12 object-cover"
                                        src="/storage/{{ Auth::user()->profile_photo_path }}"
                                        alt="{{ Auth::user()->name }}" />
                                @else
                                    <img class="rounded-full h-12 w-12 object-cover"
                                        src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                @endif
                            </button>
                        @else
                            <span class="inline-flex rounded-md">
                                <button type="button"
                                    class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150">
                                    {{ Auth::user()->name }}

                                    <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                    </svg>
                                </button>
                            </span>
                        @endif
                    </x-slot>

                    <x-slot name="content">
                        <!-- Account Management -->
                        <div class="block px-4 py-2 text-xs text-gray-400">
                            {{ __('Manage Account') }}
                        </div>

                        <x-dropdown-link href="{{ route('profile.show') }}">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <x-dropdown-link href="{{ route('orders.index') }}">
                            {{ __('Mis órdenes') }}
                        </x-dropdown-link>

                        @can('admin.home')
                            <x-dropdown-link href="{{ route('admin.home') }}">
                                {{ __('Dashboard') }}
                            </x-dropdown-link>
                        @endcan



                        {{-- {{-- @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                            <x-dropdown-link href="{{ route('api-tokens.index') }}">
                                {{ __('API Tokens') }}
                            </x-dropdown-link>
                        @endif --} --}}

                        <div class="border-t border-gray-200"></div>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}" x-data>
                            @csrf

                            <x-dropdown-link href="{{ route('logout') }}" @click.prevent="$root.submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

        @endauth



    </nav>



</header>

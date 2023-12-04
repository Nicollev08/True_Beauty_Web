<x-app-layout>

    <link rel="stylesheet" href="{{ url('assets/css/tips.css') }}">
    <div class=" py-40 ">
        @if (isset($tips) && count($tips) > 0)
            <div class="tipcontainer">
                @foreach ($tips as $index => $tip)
                    <div class="contip">
                        <div class="tip">
                            <div class="imgBx">
                                <img src="{{ asset('storage/' . $tip->image) }}" alt="">
                            </div>
                            <div class="content">
                                <h2><b>{{ $tip->name }}</b></h2>
                                <p>{{ $tip->description }}</p>
                            </div>
                        </div>
                    </div>
                    @if (($index + 1) % 3 === 0)
                        {{-- Cada 3 tips, cierra y abre una nueva fila --}}
            </div>
            <div class="tipcontainer">
        @endif
        @endforeach
    </div>
@else
    <p class="mt-1 text-sm text-gray-500">No hay más tips disponibles</p>
    @endif

    <div class="text-center">
        <a href="/" class="opbtn1">REGRESAR</a>
    </div>
    </div>
</x-app-layout>

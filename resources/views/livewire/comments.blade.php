<div>
    <link rel="stylesheet" href="{{ url('assets/css/comments.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
        integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <section class="">
        <div class="testimonials__container">
            @if ($comments->count())
                @foreach ($comments as $comment)
                    <div class="testimonials__card container grid">
                        <div class="testimonials__item flex">
                            <div class="credentials">
                                <div class="testimonials__img">
                                    <img src="{{ $comment->user->profile_photo_url }}">
                                </div>
                                <div class="user-info">
                                    <h1>{{ $comment->user->name }}</h1>
                                </div>
                            </div>

                            <div class="testimonials__box">

                                <div class="testimonials__description">
                                    <p class="text-center">{{ $comment->comment }}</p>
                                    @for ($i = 1; $i <= $comment->rating; $i++)
                                        <label for="star{{ $i }}" class="star-label"> <i
                                                class='bx bxs-star star__icon'></i></label>
                                    @endfor
                                </div>
                                <div class="acciones">
                                    <button wire:click="openEditModal({{ $comment->id }})"><i
                                            class="fa-regular fa-pen-to-square"></i></button>
                                    <form method="POST"
                                        action="{{ route('comments.destroy', ['comment' => $comment->id]) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="pl-5"><i
                                                class="fa-regular fa-trash-can"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                @endforeach
            @else
                <p>No hay comentarios</p>
            @endif
        </div>

        <div class="text-center">
            <x-button wire:click="openModal" class="text-center">
                Nuevo comentario
            </x-button>
        </div>

        {{-- MODAL CREAR NUEVO COMENTARIO --}}


        <div class="{{ $showModal ? 'modal-open' : '' }}" wire:click="closeModal">

            @if ($showModal)
                <div class="modal-content centered" wire:click.stop>
                    <form method="POST" action="{{ route('comments.store') }}" enctype="multipart/form-data"
                        class="align-items-center justify-center">
                        @csrf
                        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">

                        <div class="form-group">

                            <div class="rate py-2">
                                @for ($i = 5; $i >= 1; $i--)
                                    <input type="radio" id="star{{ $i }}" name="rating" value="{{ $i }}" style="display: none;" />
                                    <label for="star{{ $i }}" title="{{ $i }} stars">
                                        <i class='bx bxs-star star__icon'></i>
                                    </label>
                                @endfor
                            </div>

                            <label for="comment">Opinión:</label>
                            <input type="text" name="comment" class="rounded-md text-center"
                                placeholder="Escribe un comentario">

                        </div>
                        <div class="py-2">
                            <x-button type="submit">Agregar Comentario</x-button>
                            <button wire:click="closeModal">Cerrar</button>
                        </div>

                    </form>

                </div>
            @endif
        </div>


        {{-- MODAL EDITAR COMENTARIO --}}
        <div class="{{ $editModal ? 'modal-open' : '' }}" wire:click="closeModal">
            @if ($editModal)
                @php
                    $editedComment = $comments->firstWhere('id', $editedCommentId);
                @endphp
        
                <form method="POST" action="{{ route('comments.update', ['comment' => $editedComment->id]) }}"
                    enctype="multipart/form-data" class="row gy-2 gx-3 align-items-center">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="id" id="id" value="{{ $editedComment->id }}">
                    <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
        
                    <div class="form-group">
                        <label for="comment">Opinión:</label>
                        <input type="text" name="comment" value="{{ $editedComment->comment }}">
                        <div class="rate">
                            <input type="radio" id="star" name="rating" value="{{ $editedComment->rating }}" />
                        </div>
                    </div>
        
                    <div class="py-2">
                        <x-button type="submit">Editar Comentario</x-button>
                        <button wire:click="closeModal">Cerrar</button>
                    </div>
                </form>
            @endif
        </div>
        

    </section>
   


</div>

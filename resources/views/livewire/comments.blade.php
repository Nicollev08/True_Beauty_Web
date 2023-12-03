<div>
    <link rel="stylesheet" href="{{ url('assets/css/comments.css') }}">
    <script src="JS/comments.js" defer></script>

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
                                    <div class="stars">
                                        @for ($i = 1; $i <= $comment->rating; $i++)
                                            <label for="star{{ $i }}" class="star-label"><i
                                                    class="fas fa-star"></i></label>
                                        @endfor

                                        @if (auth()->user() && $comment->user_id === auth()->user()->id)
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
                                        @endif

                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                @endforeach
            @else
                <p class="text-center">No hay comentarios</p>
            @endif
        </div>


        <div class="text-center">
            <x-button wire:click="handleCommentButtonClick" class="text-center">
                Nuevo comentario
            </x-button>
        </div>




        {{-- MODAL CREAR NUEVO COMENTARIO --}}

        <div class="{{ $showModal ? 'modal-open' : '' }}" wire:click="closeModal">

            @if ($showModal)
                <div class="modal-content centered" wire:click.stop>
                    @if (Auth::check())
                        <form action="{{ route('comments.store') }}" method="POST">
                            @csrf
                            <div class="credentials">
                                @if (Auth::user()->profile_photo_path === null)
                                    <img src="{{ Auth::user()->profile_photo_url }}" alt="avatar" class="imagh">
                                @else
                                    <img src="{{ asset('storage/' . Auth::user()->profile_photo_path) }}"
                                        alt="avatar" class="imagh">
                                @endif
                                <input value="{{ Auth::user()->name }}" readonly class="plain-input">
                            </div>
                            <div class="line"></div>
                            <div>
                                <label for="">Deja un comentario</label><br>
                                <input type="text" name="comment" class="text-center" placeholder="Escribe aquí...">


                                <div class="star-rating">
                                    <input type="radio" id="star5" name="rating" value="5">
                                    <label for="star5"></label>
                                    <input type="radio" id="star4" name="rating" value="4">
                                    <label for="star4"></label>
                                    <input type="radio" id="star3" name="rating" value="3">
                                    <label for="star3"></label>
                                    <input type="radio" id="star2" name="rating" value="2">
                                    <label for="star2"></label>
                                    <input type="radio" id="star1" name="rating" value="1">
                                    <label for="star1"></label>

                                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                </div>


                                <br>
                                <x-button type="submit">Enviar</x-button>
                                <button wire:click.prevent="closeModal">Cerrar</button>
                            </div>
                        </form>
                    @endif
                </div>
            @endif
        </div>



        {{-- MODAL EDITAR COMENTARIO --}}
        <div class="{{ $editModal ? 'modal-open' : '' }}" wire:click="closeModal">
            @if ($editModal)
                <div class="modal-content centered" wire:click.stop>
                    @php
                        $editedComment = $comments->firstWhere('id', $editedCommentId);
                    @endphp

                    <form method="POST" action="{{ route('comments.update', ['comment' => $editedComment->id]) }}"
                        enctype="multipart/form-data" class="row gy-2 gx-3 align-items-center">

                        @csrf
                        @method('PUT')

                        <input type="hidden" name="id" id="id" value="{{ $editedComment->id }}">
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

                        <div class="form-group">
                            <label for="comment">Opinión:</label>
                            <input type="text" name="comment" value="{{ $editedComment->comment }}">

                            <div class="star-rating">
                                @for ($i = 5; $i >= 1; $i--)
                                    <input type="radio" id="editStar{{ $i }}" name="rating"
                                        value="{{ $i }}"
                                        {{ $i == $editedComment->rating ? 'checked' : '' }}>
                                    <label for="editStar{{ $i }}"></label>
                                @endfor
                            </div>


                            <div class="">
                                <x-button type="submit">Editar Comentario</x-button>
                                <button wire:click.prevent="closeEditModal">Cerrar</button>
                            </div>
                        </div>

                    </form>
                </div>
            @endif
        </div>


    </section>


</div>

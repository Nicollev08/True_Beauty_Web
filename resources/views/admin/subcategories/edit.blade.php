@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar subcategoría</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{ session('info') }}</strong>
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            <p class="h5">Nombre</p>
            <p class="form-control">{{ $subcategory->name }}</p>


            <h2 class="h5">¿A que categoría pertenece?</h2>
            {!! Form::model($subcategory, ['route' => ['admin.subcategories.update', $subcategory], 'method' => 'put']) !!}
            @foreach ($categories as $category)
                <div>
                    <label>
                        {!! Form::checkbox(
                            'category_id',
                            $category->id,
                            $subcategory->category && $subcategory->category->id === $category->id,
                            ['class' => 'mr-1'],
                        ) !!}
                        {{ $category->name }}
                    </label>
                </div>
            @endforeach



            {!! Form::submit('Asignar rol', ['class' => 'btn btn-primary mt-2']) !!}

            {!! Form::close() !!}
        </div>
    </div>
@stop

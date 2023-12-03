@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

@stop

@section('content')
    <div class="container py-4">

        <div class="row">
            <div class="col-md-3">
                <a href="{{ route('admin.orders.index') . '?status=2' }}" class="btn btn-primary btn-block mb-4">
                    <p class="text-center h2">{{ $recibido }}</p>
                    <p class="text-center text-uppercase">Recibido</p>
                    <p class="text-center h2 mt-2">
                        <i class="fas fa-credit-card"></i>
                    </p>
                </a>
            </div>

            <div class="col-md-3">
                <a href="{{ route('admin.orders.index') . '?status=3' }}" class="btn btn-warning btn-block mb-4">
                    <p class="text-center h2">{{ $enviado }}</p>
                    <p class="text-center text-uppercase">Enviado</p>
                    <p class="text-center h2 mt-2">
                        <i class="fas fa-truck"></i>
                    </p>
                </a>
            </div>

            <div class="col-md-3">
                <a href="{{ route('admin.orders.index') . '?status=4' }}" class="btn btn-success btn-block mb-4">
                    <p class="text-center h2">{{ $entregado }}</p>
                    <p class="text-center text-uppercase">Entregado</p>
                    <p class="text-center h2 mt-2">
                        <i class="fas fa-check-circle"></i>
                    </p>
                </a>
            </div>

            <div class="col-md-3">
                <a href="{{ route('admin.orders.index') . '?status=5' }}" class="btn btn-danger btn-block mb-4">
                    <p class="text-center h2">{{ $anulado }}</p>
                    <p class="text-center text-uppercase">Anulado</p>
                    <p class="text-center h2 mt-2">
                        <i class="fas fa-times-circle"></i>
                    </p>
                </a>
            </div>
        </div>

        @if ($orders->count())
            <div class="card mt-4">
                <div class="card-body">
                    <h2 class="card-title">Pedidos recientes</h2>
                </div>
                <div class="mb-4"> <!-- Agregado para espacio adicional -->
                    <ul class="list-group">
                        @foreach ($orders as $order)
                            <li class="list-group-item">
                                <a href="{{ route('admin.orders.show', $order) }}" class="d-flex align-items-center text-dark">
                                    <span class="w-12 text-center">
                                        @switch($order->status)
                                            @case(1)
                                                <i class="fas fa-business-time text-secondary opacity-50"></i>
                                            @break

                                            @case(2)
                                                <i class="fas fa-credit-card text-primary opacity-50"></i>
                                            @break

                                            @case(3)
                                                <i class="fas fa-truck text-warning opacity-50"></i>
                                            @break

                                            @case(4)
                                                <i class="fas fa-check-circle text-success opacity-50"></i>
                                            @break

                                            @case(5)
                                                <i class="fas fa-times-circle text-danger opacity-50"></i>
                                            @break

                                            @default
                                        @endswitch
                                    </span>

                                    <span class="ml-2">
                                        Orden: {{ $order->id }}
                                        <br>
                                        {{ $order->created_at->format('d/m/Y') }}
                                    </span>

                                    <div class="ml-auto">
                                        <span class="font-weight-bold">
                                            @switch($order->status)
                                                @case(1)
                                                    Pendiente
                                                @break

                                                @case(2)
                                                    Recibido
                                                @break

                                                @case(3)
                                                    Enviado
                                                @break

                                                @case(4)
                                                    Entregado
                                                @break

                                                @case(5)
                                                    Anulado
                                                @break

                                                @default
                                            @endswitch
                                        </span>

                                        <br>

                                        <span class="text-sm">
                                            ${{ $order->total }}
                                        </span>
                                    </div>

                                    <span class="ml-auto">
                                        <i class="fas fa-angle-right ml-2"></i>
                                    </span>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @else
            <div class="card mt-4">
                <div class="card-body">
                    <h2 class="card-title mb-4">Pedidos recientes</h2>
                    <span class="font-weight-bold text-lg p-4">
                        No existen registros de órdenes
                    </span>
                </div>
            </div>
        @endif

    </div>

@stop

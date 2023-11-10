@props(['size' => 30, 'color' => 'black'])

@php
    switch ($color) {
        case 'black':
            $col = '#050505';
            break;

        case 'white':
            $col = '#ffffff';
            break;
        
        default:
            $col = '#050505';
            break;
    }
@endphp

<i class="fa-solid fa-magnifying-glass" width="{{ $size }}" height="{{ $size }}" style="color: {{ $col }}"></i>
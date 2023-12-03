@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-pink-500 focus:border-blue-200 focus:ring-blue-400 rounded-md shadow-sm']) !!}>

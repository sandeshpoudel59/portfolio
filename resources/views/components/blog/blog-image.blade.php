@props([
    'src' => null,
    'alt' => '',
])

@if($src)

    <img
        src="{{ $src }}"
        alt="{{ $alt }}"
        {{ $attributes->merge([
            'class' => 'h-56 w-full object-cover'
        ]) }}
    >

@endif
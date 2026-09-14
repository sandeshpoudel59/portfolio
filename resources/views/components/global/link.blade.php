@props([
    'href' => '#',
    'variant' => 'default',
    'external' => false,
])

@php
    $variants = [
        'default' => 'text-gray-700 hover:text-gray-950',
        'underline' => 'text-gray-700 underline-offset-4 hover:underline',
        'muted' => 'text-gray-500 hover:text-gray-900',
        'white' => 'text-gray-300 hover:text-white',
    ];
@endphp

@php
    $variantClass = $variants[$variant] ?? $variants['default'];
@endphp

<a
    href="{{ $href }}"
    @if($external)
        target="_blank"
        rel="noopener noreferrer"
    @endif

   

{{ $attributes->merge([
    'class' => "transition {$variantClass}"
]) }}
>
    {{ $slot }}
</a>
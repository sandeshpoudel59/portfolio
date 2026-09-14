@props([
    'type' => 'button',
    'variant' => 'default',
    'size' => 'md',
])

@php
    $variants = [
        'default' => 'border border-gray-200 bg-white text-gray-700 hover:bg-gray-100',
        'dark' => 'bg-gray-900 text-white hover:bg-gray-700',
        'ghost' => 'text-gray-700 hover:bg-gray-100',
    ];

    $sizes = [
        'sm' => 'h-8 w-8',
        'md' => 'h-10 w-10',
        'lg' => 'h-12 w-12',
    ];

    $variantClass = $variants[$variant] ?? $variants['default'];
    $sizeClass = $sizes[$size] ?? $sizes['md'];

    $classes = "inline-flex items-center justify-center rounded-lg transition focus:outline-none focus:ring-2 focus:ring-gray-400 {$variantClass} {$sizeClass}";
@endphp

<button
    type="{{ $type }}"
    {{ $attributes->merge([
        'class' => $classes,
    ]) }}
>
    {{ $slot }}
</button>
@props([
    'size' => '7xl',
])

@php
    $sizes = [
        'sm' => 'max-w-3xl',
        'md' => 'max-w-5xl',
        'lg' => 'max-w-6xl',
        '7xl' => 'max-w-7xl',
        'full' => 'max-w-full',
    ];

    $maxWidth = $sizes[$size] ?? $sizes['7xl'];
@endphp

<div
    {{ $attributes->merge([
        'class' => "mx-auto w-full px-6 {$maxWidth}",
    ]) }}
>
    {{ $slot }}
</div>
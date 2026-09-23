@props([
    'href' => '#',
    'variant' => 'default',
    'external' => false,
])

@php
    $variants = [
        'default' => 'hover:text-gray-950',
        'underline' => 'underline-offset-4 hover:underline',
        'muted' => 'hover:text-gray-900',
        'white' => 'hover:text-white',
    ];

    $variantClass = $variants[$variant] ?? $variants['default'];
    $themeText = data_get($personData ?? [], 'theme.text_color', '#111827');
@endphp

<a
    href="{{ $href }}"
    @if($external)
        target="_blank"
        rel="noopener noreferrer"
    @endif
    style="color: {{ $themeText }};"
    {{ $attributes->merge([
        'class' => "transition {$variantClass}"
    ]) }}
>
    {{ $slot }}
</a>
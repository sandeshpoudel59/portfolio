@props([
    'href' => null,
    'type' => 'button',
    'variant' => 'primary',
    'size' => 'md',
    'icon' => null,
    'iconPosition' => 'right',
])

@php
    $variants = [
        'primary' => 'bg-indigo-600 text-white hover:bg-indigo-700 focus:ring-indigo-500',
        'secondary' => 'bg-gray-100 text-gray-900 hover:bg-gray-200 focus:ring-gray-400',
        'outline' => 'border border-gray-300 text-gray-700 hover:bg-gray-50 focus:ring-gray-400',
        'danger' => 'bg-red-600 text-white hover:bg-red-700 focus:ring-red-500',
        'ghost' => 'text-gray-700 hover:bg-gray-100 focus:ring-gray-400',
    ];

    $sizes = [
        'sm' => 'px-3 py-2 text-sm',
        'md' => 'px-4 py-2.5 text-sm',
        'lg' => 'px-6 py-3 text-base',
    ];

    $classes = collect([
        'inline-flex items-center justify-center gap-2 rounded-lg font-medium transition',
        'focus:outline-none focus:ring-2 focus:ring-offset-2',
        'disabled:pointer-events-none disabled:opacity-50',
        $variants[$variant] ?? $variants['primary'],
        $sizes[$size] ?? $sizes['md'],
    ])->implode(' ');
@endphp

@if ($href)
    <a
        href="{{ $href }}"
        {{ $attributes->merge(['class' => $classes]) }}
    >
        @if ($icon && $iconPosition === 'left')
            <x-dynamic-component :component="$icon" class="h-5 w-5" />
        @endif

        <span>{{ $slot }}</span>

        @if ($icon && $iconPosition === 'right')
            <x-dynamic-component :component="$icon" class="h-5 w-5" />
        @endif
    </a>
@else
    <button
        type="{{ $type }}"
        {{ $attributes->merge(['class' => $classes]) }}
    >
        @if ($icon && $iconPosition === 'left')
            <x-dynamic-component :component="$icon" class="h-5 w-5" />
        @endif

        <span>{{ $slot }}</span>

        @if ($icon && $iconPosition === 'right')
            <x-dynamic-component :component="$icon" class="h-5 w-5" />
        @endif
    </button>
@endif
@props([
    'eyebrow' => null,
    'title',
    'description' => null,
    'align' => 'left',
])

@php
    $alignment = [
        'left' => 'text-left',
        'center' => 'mx-auto text-center',
        'right' => 'ml-auto text-right',
    ];

    $width = $align === 'center'
        ? 'max-w-3xl'
        : 'max-w-3xl';
@endphp

@php
    $resolvedClass = $class ?? '';
@endphp

<div
    {{ $attributes->merge([
        'class' => "some-class {$resolvedClass}",
    ]) }}
>

    @if($eyebrow)
        <p class="text-sm font-semibold uppercase tracking-widest text-gray-500">
            {{ $eyebrow }}
        </p>
    @endif

    <h2 class="{{ $eyebrow ? 'mt-2' : '' }} text-3xl font-bold text-gray-950 sm:text-4xl">
        {{ $title }}
    </h2>

    @if($description)
        <p class="mt-4 text-lg leading-8 text-gray-600">
            {{ $description }}
        </p>
    @endif

</div>
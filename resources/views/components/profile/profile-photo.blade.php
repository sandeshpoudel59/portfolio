@props([
    'src' => null,
    'name' => 'Profile photo',
    'size' => 'md',
])

@php
    $sizes = [
        'sm' => 'h-32 w-32',
        'md' => 'h-48 w-48',
        'lg' => 'h-64 w-64',
    ];
@endphp

<div class="{{ $sizes[$size] ?? $sizes['md'] }} overflow-hidden rounded-full border-8 border-white bg-gray-200 shadow-xl">

    <img
        src="{{ $src ?: asset('images/default-profile.png') }}"
        alt="{{ $name }}"
        class="h-full w-full object-cover"
    >

</div>
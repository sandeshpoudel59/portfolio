@props([
    'id' => null,
    'background' => 'white',
    'padding' => 'normal',
])

@php
    $backgrounds = [
        'white' => 'bg-white',
        'gray' => 'bg-gray-50',
        'dark' => 'bg-gray-950 text-white',
        'transparent' => 'bg-transparent',
    ];

    $paddings = [
        'small' => 'py-12',
        'normal' => 'py-20',
        'large' => 'py-24 lg:py-32',
    ];
@endphp

<section
    @if($id)
        id="{{ $id }}"
    @endif

    {{ $attributes->merge([
        'class' => implode(' ', [
            $backgrounds[$background] ?? $backgrounds['white'],
            $paddings[$padding] ?? $paddings['normal'],
        ])
    ]) }}
>

    <x-global.container>
        {{ $slot }}
    </x-global.container>

</section>
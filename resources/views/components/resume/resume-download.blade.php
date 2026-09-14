@props([
    'resume' => [],
])

@if(!empty($resume['url']))

    <x-global.button
        href="{{ $resume['url'] }}"
        target="_blank"
        rel="noopener noreferrer"
    >
        Download Resume
    </x-global.button>

@endif
@props([
    'links' => [],
    'dark' => false,
])

@php
    $platforms = [
        'linkedin' => 'LinkedIn',
        'github' => 'GitHub',
        'twitter' => 'Twitter',
        'instagram' => 'Instagram',
    ];

    $textClass = $dark
        ? 'text-gray-400 hover:text-white'
        : 'text-gray-500 hover:text-gray-900';
@endphp

<div {{ $attributes->merge(['class' => 'flex flex-wrap items-center gap-5']) }}>

    @foreach($platforms as $key => $label)

        @if(!empty($links[$key]))

            <a
                href="{{ $links[$key] }}"
                target="_blank"
                rel="noopener noreferrer"
                class="text-sm transition {{ $textClass }}"
            >
                {{ $label }}
            </a>

        @endif

    @endforeach

    @if(!empty($links['other']) && is_array($links['other']))

        @foreach($links['other'] as $otherLink)

            @if(!empty($otherLink))

                <a
                    href="{{ $otherLink }}"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="text-sm transition {{ $textClass }}"
                >
                    Other
                </a>

            @endif

        @endforeach

    @endif

</div>
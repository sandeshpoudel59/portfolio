@props([
    'type' => 'info',
    'title' => null,
])

@php
    $styles = [
        'success' => [
            'wrapper' => 'border-green-200 bg-green-50 text-green-800',
            'icon' => 'text-green-600',
        ],
        'error' => [
            'wrapper' => 'border-red-200 bg-red-50 text-red-800',
            'icon' => 'text-red-600',
        ],
        'warning' => [
            'wrapper' => 'border-yellow-200 bg-yellow-50 text-yellow-800',
            'icon' => 'text-yellow-600',
        ],
        'info' => [
            'wrapper' => 'border-blue-200 bg-blue-50 text-blue-800',
            'icon' => 'text-blue-600',
        ],
    ];

    $style = $styles[$type] ?? $styles['info'];
@endphp

<div
    {{ $attributes->merge([
        'class' => "rounded-xl border p-4 {$style['wrapper']}"
    ]) }}
    role="alert"
>
    <div class="flex gap-3">

        <svg
            class="mt-0.5 h-5 w-5 shrink-0 {{ $style['icon'] }}"
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
            stroke-width="2"
        >
            <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M12 9v3.75m0 3.75h.008M10.29 3.86l-8.18 14a1.5 1.5 0 001.3 2.25h17.18a1.5 1.5 0 001.3-2.25l-8.18-14a1.5 1.5 0 00-2.6 0z"
            />
        </svg>

        <div class="min-w-0 flex-1">

            @if($title)
                <h3 class="font-semibold">
                    {{ $title }}
                </h3>
            @endif

            <div class="{{ $title ? 'mt-1' : '' }} text-sm">
                {{ $slot }}
            </div>

        </div>

    </div>
</div>
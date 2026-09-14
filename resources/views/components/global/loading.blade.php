@props([
    'label' => 'Loading...',
    'fullscreen' => false,
])

<div
    {{ $attributes->merge([
        'class' => $fullscreen
            ? 'fixed inset-0 z-[100] flex items-center justify-center bg-white'
            : 'flex items-center justify-center py-12'
    ]) }}
    role="status"
    aria-live="polite"
>

    <div class="flex items-center gap-3">

        <svg
            class="h-5 w-5 animate-spin text-gray-700"
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
        >
            <circle
                class="opacity-25"
                cx="12"
                cy="12"
                r="10"
                stroke="currentColor"
                stroke-width="4"
            />

            <path
                class="opacity-75"
                fill="currentColor"
                d="M4 12a8 8 0 018-8v4a4 4 0 00-4 4H4z"
            />
        </svg>

        <span class="text-sm text-gray-600">
            {{ $label }}
        </span>

    </div>

</div>
@props([
    'title' => 'Nothing here yet',
    'description' => null,
    'action' => null,
    'actionUrl' => null,
])

<div
    {{ $attributes->merge([
        'class' => 'rounded-2xl border border-dashed border-gray-300 bg-gray-50 px-6 py-12 text-center'
    ]) }}
>

    <div class="mx-auto flex h-12 w-12 items-center justify-center rounded-full bg-gray-200 text-gray-500">

        <svg
            class="h-6 w-6"
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
        >
            <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0l-8 5-8-5m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5"
            />
        </svg>

    </div>

    <h3 class="mt-4 text-lg font-semibold text-gray-900">
        {{ $title }}
    </h3>

    @if($description)
        <p class="mx-auto mt-2 max-w-md text-sm text-gray-500">
            {{ $description }}
        </p>
    @endif

    @if($action && $actionUrl)
        <div class="mt-6">
            <x-global.button
                href="{{ $actionUrl }}"
                size="sm"
            >
                {{ $action }}
            </x-global.button>
        </div>
    @endif

</div>
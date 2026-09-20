@props([
    'title',
    'description' => null,
    'action' => null,
    'actionText' => null,
])

<div class="mb-8 flex flex-col gap-4 sm:flex-row sm:items-end sm:justify-between">

    <div>
        @if (isset($breadcrumb))
            <div class="mb-3">
                {{ $breadcrumb }}
            </div>
        @endif

        <h1 class="text-2xl font-bold tracking-tight text-gray-900 sm:text-3xl">
            {{ $title }}
        </h1>

        @if ($description)
            <p class="mt-2 max-w-2xl text-sm leading-6 text-gray-600">
                {{ $description }}
            </p>
        @endif
    </div>

    @if ($action && $actionText)
        <a
            href="{{ $action }}"
            class="inline-flex items-center justify-center rounded-lg bg-gray-900 px-4 py-2.5 text-sm font-medium text-white transition hover:bg-gray-800"
        >
            {{ $actionText }}
        </a>
    @endif

</div>

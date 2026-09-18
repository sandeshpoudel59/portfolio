@props([
    'title',
    'description' => null,
])

<div class="mb-8">
    <h1 class="text-2xl font-bold tracking-tight text-gray-900 sm:text-3xl">
        {{ $title }}
    </h1>

    @if ($description)
        <p class="mt-2 max-w-2xl text-sm leading-6 text-gray-600">
            {{ $description }}
        </p>
    @endif
</div>

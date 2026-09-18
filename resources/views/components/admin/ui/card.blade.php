@props([
    'title' => null,
    'description' => null,
])

<section {{ $attributes->merge(['class' => 'rounded-xl border border-gray-200 bg-white shadow-sm']) }}>
    @if ($title || $description)
        <div class="border-b border-gray-200 px-5 py-4">
            @if ($title)
                <h2 class="font-semibold text-gray-900">{{ $title }}</h2>
            @endif
            @if ($description)
                <p class="mt-1 text-sm text-gray-500">{{ $description }}</p>
            @endif
        </div>
    @endif

    <div class="p-5">
        {{ $slot }}
    </div>
</section>

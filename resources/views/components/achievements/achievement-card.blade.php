@props([
    'achievement' => [],
])

<article class="rounded-2xl border border-gray-200 bg-white p-6 shadow-sm">

    <div class="flex flex-col gap-4 sm:flex-row sm:items-start sm:justify-between">

        <div>
            <h3 class="text-xl font-semibold text-gray-900">
                {{ $achievement['title'] ?? '' }}
            </h3>

            @if(!empty($achievement['organization']))
                <p class="mt-1 text-sm font-medium text-gray-500">
                    {{ $achievement['organization'] }}
                </p>
            @endif
        </div>

        @if(!empty($achievement['date']))
            <time class="text-sm text-gray-500">
                {{ $achievement['date'] }}
            </time>
        @endif

    </div>

    @if(!empty($achievement['description']))
        <p class="mt-4 leading-7 text-gray-600">
            {{ $achievement['description'] }}
        </p>
    @endif

</article>
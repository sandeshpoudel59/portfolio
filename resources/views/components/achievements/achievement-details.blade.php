@props([
    'achievement' => [],
])

<div class="space-y-4">

    @if(!empty($achievement['description']))
        <p class="leading-7 text-gray-600">
            {{ $achievement['description'] }}
        </p>
    @endif

    @if(!empty($achievement['organization']))
        <div>
            <span class="text-sm font-medium text-gray-500">
                Organization
            </span>

            <p class="mt-1 text-gray-900">
                {{ $achievement['organization'] }}
            </p>
        </div>
    @endif

    @if(!empty($achievement['date']))
        <div>
            <span class="text-sm font-medium text-gray-500">
                Date
            </span>

            <p class="mt-1 text-gray-900">
                {{ $achievement['date'] }}
            </p>
        </div>
    @endif

</div>
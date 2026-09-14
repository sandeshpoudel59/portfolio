@props([
    'location' => [],
])

@if(!empty($location['city']) || !empty($location['country']))

    <p class="text-sm text-gray-500">

        {{ $location['city'] ?? '' }}

        @if(!empty($location['city']) && !empty($location['country']))
            ,
        @endif

        {{ $location['country'] ?? '' }}

    </p>

@endif
@props([
    'service' => [],
])

<h3 class="text-xl font-semibold text-gray-900">
    {{ $service['name'] ?? '' }}
</h3>

@if(!empty($service['description']))
    <p class="mt-3 leading-7 text-gray-600">
        {{ $service['description'] }}
    </p>
@endif
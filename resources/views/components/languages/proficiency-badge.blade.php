@props([
    'proficiency' => '',
])

@if($proficiency)

    <span class="inline-flex rounded-full bg-gray-100 px-3 py-1 text-xs font-medium text-gray-700">
        {{ $proficiency }}
    </span>

@endif
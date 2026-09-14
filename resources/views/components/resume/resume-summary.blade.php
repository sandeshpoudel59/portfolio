@props([
    'personData' => [],
])

<div>

    <h2 class="text-2xl font-bold text-gray-900">
        Professional Summary
    </h2>

    <p class="mt-4 max-w-3xl text-lg leading-8 text-gray-600">
        {{ $personData['about']['bio'] ?? $personData['personal']['shortBio'] ?? '' }}
    </p>

</div>
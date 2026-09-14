@props([
    'personData' => [],
])

@if(!empty($personData['about']['bio']))

    <div class="max-w-3xl">
        <h3 class="text-xl font-semibold text-gray-900">
            Biography
        </h3>

        <div class="mt-4 space-y-4 text-lg leading-8 text-gray-600">
            {!! nl2br(e($personData['about']['bio'])) !!}
        </div>
    </div>

@endif
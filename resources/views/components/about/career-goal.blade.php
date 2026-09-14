@props([
    'personData' => [],
])

@if(!empty($personData['about']['careerGoal']))

    <div class="rounded-2xl border border-gray-200 bg-gray-50 p-6">

        <h3 class="text-lg font-semibold text-gray-900">
            Career Goal
        </h3>

        <p class="mt-3 leading-7 text-gray-600">
            {{ $personData['about']['careerGoal'] }}
        </p>

    </div>

@endif
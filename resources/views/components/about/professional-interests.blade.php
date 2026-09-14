@props([
    'personData' => [],
])

@if(!empty($personData['about']['professionalInterests']))

    <div>

        <h3 class="text-lg font-semibold text-gray-900">
            Professional Interests
        </h3>

        <div class="mt-4 flex flex-wrap gap-2">

            @foreach($personData['about']['professionalInterests'] as $interest)

                <span class="rounded-full bg-gray-100 px-4 py-2 text-sm text-gray-700">
                    {{ $interest }}
                </span>

            @endforeach

        </div>

    </div>

@endif
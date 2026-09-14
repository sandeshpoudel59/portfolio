@props([
    'experience' => [],
])

<div>

    <h3 class="text-xl font-semibold text-gray-900">
        {{ $experience['jobTitle'] ?? '' }}
    </h3>

    <p class="mt-1 font-medium text-gray-600">
        {{ $experience['company'] ?? '' }}
    </p>

    @if(!empty($experience['location']) || !empty($experience['employmentType']))

        <div class="mt-2 flex flex-wrap gap-x-3 gap-y-1 text-sm text-gray-500">

            @if(!empty($experience['employmentType']))
                <span>
                    {{ $experience['employmentType'] }}
                </span>
            @endif

            @if(!empty($experience['location']))
                <span>
                    {{ $experience['location'] }}
                </span>
            @endif

        </div>

    @endif

</div>
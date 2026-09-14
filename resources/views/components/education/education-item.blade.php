@props([
    'education' => [],
])

<article class="rounded-2xl border border-gray-200 bg-white p-6 shadow-sm">

    <div class="flex flex-col gap-2 sm:flex-row sm:items-start sm:justify-between">

        <div>

            <h3 class="text-xl font-semibold text-gray-900">
                {{ $education['degree'] ?? '' }}
            </h3>

            @if(!empty($education['fieldOfStudy']))
                <p class="mt-1 text-gray-600">
                    {{ $education['fieldOfStudy'] }}
                </p>
            @endif

        </div>

        @if(!empty($education['startDate']) || !empty($education['endDate']))

            <p class="text-sm text-gray-500">

                {{ $education['startDate'] ?? '' }}

                @if(!empty($education['startDate']) || !empty($education['endDate']))
                    -
                @endif

                {{ $education['endDate'] ?? '' }}

            </p>

        @endif

    </div>

    @if(!empty($education['institution']))
        <p class="mt-4 font-medium text-gray-700">
            {{ $education['institution'] }}
        </p>
    @endif

    @if(!empty($education['location']))
        <p class="mt-1 text-sm text-gray-500">
            {{ $education['location'] }}
        </p>
    @endif

    @if(!empty($education['description']))
        <p class="mt-4 leading-7 text-gray-600">
            {{ $education['description'] }}
        </p>
    @endif

    <x-education.education-achievements
        :achievements="$education['achievements'] ?? []"
    />

</article>
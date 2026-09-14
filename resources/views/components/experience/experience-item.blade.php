@props([
    'experience' => [],
])

<article class="rounded-2xl border border-gray-200 bg-white p-6 shadow-sm">

    <div class="flex flex-col gap-4 sm:flex-row sm:justify-between">

        <x-experience.experience-header
            :experience="$experience"
        />

        <p class="shrink-0 text-sm text-gray-500">

            {{ $experience['startDate'] ?? '' }}

            @if(!empty($experience['startDate']) || !empty($experience['endDate']))
                -
            @endif

            {{ $experience['endDate'] ?? '' }}

        </p>

    </div>

    @if(!empty($experience['description']))
        <p class="mt-5 leading-7 text-gray-600">
            {{ $experience['description'] }}
        </p>
    @endif

    <x-experience.experience-achievements
        :achievements="$experience['achievements'] ?? []"
    />

</article>
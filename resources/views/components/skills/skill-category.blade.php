@props([
    'title',
    'skills' => [],
])

@if(!empty($skills))

    <div class="rounded-2xl border border-gray-200 bg-white p-6">

        <h3 class="text-lg font-semibold text-gray-900">
            {{ $title }}
        </h3>

        <div class="mt-4 flex flex-wrap gap-2">

            @foreach($skills as $skill)

                <x-skills.skill-card
                    :skill="$skill"
                />

            @endforeach

        </div>

    </div>

@endif
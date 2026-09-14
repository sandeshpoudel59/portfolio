@props([
    'skills' => [],
])

<div>

    <h2 class="text-2xl font-bold text-gray-900">
        Skills
    </h2>

    <div class="mt-5 flex flex-wrap gap-2">

        @foreach($skills as $skill)

            <x-skills.skill-card
                :skill="$skill"
            />

        @endforeach

    </div>

</div>
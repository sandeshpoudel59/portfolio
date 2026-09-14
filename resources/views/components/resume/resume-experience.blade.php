@props([
    'experience' => [],
])

<div>

    <h2 class="text-2xl font-bold text-gray-900">
        Experience
    </h2>

    <div class="mt-6 space-y-6">

        @foreach($experience as $item)

            <x-experience.experience-item
                :experience="$item"
            />

        @endforeach

    </div>

</div>
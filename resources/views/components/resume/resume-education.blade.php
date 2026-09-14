@props([
    'education' => [],
])

<div>

    <h2 class="text-2xl font-bold text-gray-900">
        Education
    </h2>

    <div class="mt-6 space-y-6">

        @foreach($education as $item)

            <x-education.education-item
                :education="$item"
            />

        @endforeach

    </div>

</div>
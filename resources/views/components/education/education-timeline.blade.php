@props([
    'education' => [],
])

<div class="relative border-l border-gray-200 pl-8">

    @foreach($education as $item)

        <div class="relative pb-10 last:pb-0">

            <span class="absolute -left-[37px] top-1 h-4 w-4 rounded-full border-4 border-white bg-gray-900"></span>

            <x-education.education-item
                :education="$item"
            />

        </div>

    @endforeach

</div>
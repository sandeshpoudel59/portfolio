@props([
    'experience' => [],
])

<div class="relative border-l border-gray-200 pl-8">

    @foreach($experience as $item)

        <div class="relative pb-10 last:pb-0">

            <span class="absolute -left-[37px] top-6 h-4 w-4 rounded-full border-4 border-white bg-gray-900"></span>

            <x-experience.experience-item
                :experience="$item"
            />

        </div>

    @endforeach

</div>
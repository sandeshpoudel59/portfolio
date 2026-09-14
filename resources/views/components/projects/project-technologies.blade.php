@props([
    'technologies' => [],
])

@if(!empty($technologies))

    <div class="flex flex-wrap gap-2">

        @foreach($technologies as $technology)

            <span class="rounded-full bg-gray-100 px-3 py-1 text-xs font-medium text-gray-700">
                {{ $technology }}
            </span>

        @endforeach

    </div>

@endif
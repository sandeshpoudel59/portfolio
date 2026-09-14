@props([
    'tags' => [],
])

@if(!empty($tags))

    <div class="flex flex-wrap gap-2">

        @foreach($tags as $tag)

            <span class="rounded-full bg-gray-100 px-3 py-1 text-xs text-gray-700">
                {{ $tag }}
            </span>

        @endforeach

    </div>

@endif
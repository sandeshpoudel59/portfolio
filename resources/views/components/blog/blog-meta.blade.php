@props([
    'date' => null,
    'readingTime' => null,
])

<div class="flex flex-wrap gap-3 text-sm text-gray-500">

    @if($date)
        <time>
            {{ $date }}
        </time>
    @endif

    @if($readingTime)
        <span>
            {{ $readingTime }} min read
        </span>
    @endif

</div>
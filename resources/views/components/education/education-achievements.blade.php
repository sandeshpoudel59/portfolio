@props([
    'achievements' => [],
])

@if(!empty($achievements))

    <ul class="mt-4 list-disc space-y-2 pl-5 text-gray-600">

        @foreach($achievements as $achievement)

            <li>
                {{ $achievement }}
            </li>

        @endforeach

    </ul>

@endif
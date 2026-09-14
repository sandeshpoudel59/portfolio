@props([
    'achievements' => [],
])

@if(!empty($achievements))

    <ul class="mt-4 space-y-2 text-gray-600">

        @foreach($achievements as $achievement)

            <li class="flex gap-3">
                <span class="mt-2 h-1.5 w-1.5 shrink-0 rounded-full bg-gray-900"></span>

                <span>
                    {{ $achievement }}
                </span>
            </li>

        @endforeach

    </ul>

@endif
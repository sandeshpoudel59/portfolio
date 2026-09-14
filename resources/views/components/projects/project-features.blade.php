@props([
    'features' => [],
])

@if(!empty($features))

    <ul class="mt-4 space-y-2 text-sm text-gray-600">

        @foreach($features as $feature)

            <li class="flex gap-2">
                <span>✓</span>
                <span>{{ $feature }}</span>
            </li>

        @endforeach

    </ul>

@endif
@props([
    'label',
    'value' => null,
    'href' => null,
])

@if($value)

    <div>

        <dt class="text-sm font-medium text-gray-500">
            {{ $label }}
        </dt>

        <dd class="mt-1">

            @if($href)

                <x-global.link
                    href="{{ $href }}"
                    class="text-gray-900"
                >
                    {{ $value }}
                </x-global.link>

            @else

                <span class="text-gray-900">
                    {{ $value }}
                </span>

            @endif

        </dd>

    </div>

@endif
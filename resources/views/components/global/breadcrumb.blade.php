@props([
    'items' => [],
])

@if(count($items))
    <nav
        {{ $attributes->merge(['class' => 'flex']) }}
        aria-label="Breadcrumb"
    >
        <ol class="flex flex-wrap items-center gap-2 text-sm text-gray-500">

            @foreach($items as $index => $item)

                @php
                    $isLast = $index === array_key_last($items);
                    $label = $item['label'] ?? '';
                    $url = $item['url'] ?? null;
                @endphp

                <li class="flex items-center gap-2">

                    @if(!$isLast)
                        @if($url)
                            <a
                                href="{{ $url }}"
                                class="transition hover:text-gray-900"
                            >
                                {{ $label }}
                            </a>
                        @else
                            <span>
                                {{ $label }}
                            </span>
                        @endif

                        <svg
                            class="h-4 w-4 text-gray-400"
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M9 5l7 7-7 7"
                            />
                        </svg>
                    @else
                        <span
                            class="font-medium text-gray-900"
                            aria-current="page"
                        >
                            {{ $label }}
                        </span>
                    @endif

                </li>

            @endforeach

        </ol>
    </nav>
@endif
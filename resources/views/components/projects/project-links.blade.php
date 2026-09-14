@props([
    'project' => [],
])

@if(!empty($project['liveUrl']) || !empty($project['sourceCodeUrl']))

    <div class="mt-6 flex flex-wrap gap-4">

        @if(!empty($project['liveUrl']))

            <x-global.link
                href="{{ $project['liveUrl'] }}"
                external
                class="text-sm font-semibold"
            >
                Live Project →
            </x-global.link>

        @endif

        @if(!empty($project['sourceCodeUrl']))

            <x-global.link
                href="{{ $project['sourceCodeUrl'] }}"
                external
                variant="muted"
                class="text-sm font-semibold"
            >
                Source Code →
            </x-global.link>

        @endif

    </div>

@endif
@props([
    'project' => [],
])

<div>

    <h3 class="text-xl font-semibold text-gray-900">
        {{ $project['name'] ?? '' }}
    </h3>

    @if(!empty($project['role']))
        <p class="mt-1 text-sm font-medium text-gray-500">
            {{ $project['role'] }}
        </p>
    @endif

    @if(!empty($project['description']))
        <p class="mt-3 leading-7 text-gray-600">
            {{ $project['description'] }}
        </p>
    @endif

</div>
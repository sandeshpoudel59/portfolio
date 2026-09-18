@props([
    'activity' => [],
])

<div class="py-3">
    <p class="text-sm font-medium text-gray-900">
        {{ $activity['title'] ?? 'Activity' }}
    </p>
    <p class="mt-1 text-xs text-gray-500">
        {{ $activity['time'] ?? '' }}
    </p>
</div>

@props([
    'activities' => [],
])

<x-admin.ui.card title="Recent Activity">
    @if (count($activities))
        <div class="divide-y divide-gray-100">
            @foreach ($activities as $activity)
                <x-admin.dashboard.recent-item :activity="$activity" />
            @endforeach
        </div>
    @else
        <x-admin.ui.empty-state
            title="No activity yet"
            message="Recent administrative activity will appear here."
        />
    @endif
</x-admin.ui.card>

@extends('admin.layouts.app')

@section('title', $config['label'])
@section('admin-topbar-title', $config['label'])

@section('content')
    @include('admin.layouts.partials.page-header', [
        'title' => $config['label'],
        'description' => "Manage {$config['label']} displayed on your public portfolio.",
        'action' => route('admin.content.create', $section),
        'actionText' => "Add {$config['label']}",
    ])

    <div class="space-y-4">
        @forelse ($items as $index => $item)
            <article class="rounded-xl border border-gray-200 bg-white p-5 shadow-sm">
                <div class="flex flex-col gap-4 sm:flex-row sm:items-start sm:justify-between">
                    <div>
                        <h2 class="font-semibold text-gray-900">
                            {{ data_get($item, array_key_first($config['fields']), 'Untitled') }}
                        </h2>
                        <p class="mt-2 max-w-3xl whitespace-pre-line text-sm text-gray-600">
                            {{ data_get($item, 'description', data_get($item, 'company', data_get($item, 'institution', ''))) }}
                        </p>
                    </div>
                    <div class="flex shrink-0 gap-2">
                        <a href="{{ route('admin.content.edit', [$section, $index]) }}" class="rounded-lg border border-gray-300 px-3 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">Edit</a>
                        <form method="POST" action="{{ route('admin.content.destroy', [$section, $index]) }}" onsubmit="return confirm('Delete this item?')">
                            @csrf
                            @method('DELETE')
                            <button class="rounded-lg border border-red-200 px-3 py-2 text-sm font-medium text-red-700 hover:bg-red-50">Delete</button>
                        </form>
                    </div>
                </div>
            </article>
        @empty
            <div class="rounded-xl border border-dashed border-gray-300 bg-white p-10 text-center text-sm text-gray-500">
                No {{ strtolower($config['label']) }} have been added yet.
            </div>
        @endforelse
    </div>
@endsection

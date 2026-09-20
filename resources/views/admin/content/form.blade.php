@extends('admin.layouts.app')

@php($editing = isset($itemIndex))

@section('title', ($editing ? 'Edit ' : 'Add ') . $config['label'])
@section('admin-topbar-title', ($editing ? 'Edit ' : 'Add ') . $config['label'])

@section('content')
    @include('admin.layouts.partials.page-header', [
        'title' => ($editing ? 'Edit ' : 'Add ') . $config['label'],
        'description' => 'Keep this content current on your public portfolio.',
    ])

    <form method="POST" action="{{ $editing ? route('admin.content.update', [$section, $itemIndex]) : route('admin.content.store', $section) }}" class="space-y-6">
        @csrf
        @if ($editing)
            @method('PUT')
        @endif

        <div class="rounded-xl border border-gray-200 bg-white p-5 shadow-sm">
            <div class="grid gap-5 md:grid-cols-2">
                @foreach ($config['fields'] as $name => $field)
                    <div class="{{ $field['type'] === 'textarea' ? 'md:col-span-2' : '' }}">
                        <label for="{{ $name }}" class="mb-2 block text-sm font-medium text-gray-700">{{ $field['label'] }}</label>
                        @if ($field['type'] === 'textarea')
                            <textarea id="{{ $name }}" name="{{ $name }}" rows="5" class="block w-full rounded-lg border border-gray-300 px-4 py-3 text-sm focus:border-gray-900 focus:ring-2 focus:ring-gray-900/10">{{ old($name, data_get($item ?? [], $name)) }}</textarea>
                        @else
                            <input id="{{ $name }}" type="{{ $field['type'] }}" name="{{ $name }}" value="{{ old($name, data_get($item ?? [], $name)) }}" class="block w-full rounded-lg border border-gray-300 px-4 py-3 text-sm focus:border-gray-900 focus:ring-2 focus:ring-gray-900/10">
                        @endif
                        @error($name)
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                @endforeach
            </div>
        </div>

        <div class="flex justify-end gap-3">
            <a href="{{ route('admin.content.index', $section) }}" class="rounded-lg border border-gray-300 px-4 py-2.5 text-sm font-medium text-gray-700 hover:bg-gray-50">Cancel</a>
            <button type="submit" class="rounded-lg bg-gray-900 px-4 py-2.5 text-sm font-semibold text-white hover:bg-gray-800">Save</button>
        </div>
    </form>
@endsection

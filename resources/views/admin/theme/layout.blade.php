@extends('admin.layouts.app')

@section('title', 'Layout')
@section('admin-topbar-title', 'Layout')

@section('content')
    @include('admin.layouts.partials.page-header', [
        'title' => 'Layout',
        'description' => 'Review the overall structure and spacing used throughout the portfolio design.',
    ])

    <form method="POST" action="{{ route('admin.theme.layout.update') }}" class="space-y-6">
        @csrf

        <section class="rounded-2xl border border-gray-200 bg-white p-6 shadow-sm">
            <h2 class="text-lg font-semibold text-gray-900">General layout</h2>
            <div class="mt-5 grid gap-5 md:grid-cols-2">
                <div>
                    <label for="background_color" class="mb-2 block text-sm font-medium text-gray-700">Background color</label>
                    <input id="background_color" name="background_color" type="color" value="{{ data_get($theme, 'background_color', '#ffffff') }}" class="h-12 w-20 rounded-lg border border-gray-200 bg-white p-1" />
                </div>
                <div>
                    <label for="text_color" class="mb-2 block text-sm font-medium text-gray-700">Text color</label>
                    <input id="text_color" name="text_color" type="color" value="{{ data_get($theme, 'text_color', '#111827') }}" class="h-12 w-20 rounded-lg border border-gray-200 bg-white p-1" />
                </div>
                <div>
                    <label for="container_width" class="mb-2 block text-sm font-medium text-gray-700">Container width</label>
                    <input id="container_width" name="container_width" value="{{ data_get($theme, 'container_width', '1200') }}" class="w-full rounded-lg border border-gray-200 bg-gray-50 px-3 py-2.5 text-gray-900 focus:border-gray-400 focus:outline-none" />
                </div>
                <div>
                    <label for="section_spacing" class="mb-2 block text-sm font-medium text-gray-700">Section spacing</label>
                    <input id="section_spacing" name="section_spacing" value="{{ data_get($theme, 'section_spacing', '64') }}" class="w-full rounded-lg border border-gray-200 bg-gray-50 px-3 py-2.5 text-gray-900 focus:border-gray-400 focus:outline-none" />
                </div>
            </div>
        </section>

        <section class="rounded-2xl border border-gray-200 bg-white p-6 shadow-sm">
            <h2 class="text-lg font-semibold text-gray-900">Spacing system</h2>
            <div class="mt-5 space-y-4">
                <div>
                    <p class="text-sm font-medium text-gray-500">Section padding</p>
                    <p class="mt-1 text-base text-gray-900">{{ data_get($theme, 'section_spacing', '64') }}px desktop / {{ max(24, (int) data_get($theme, 'section_spacing', '64') / 2) }}px mobile</p>
                </div>
                <div>
                    <p class="text-sm font-medium text-gray-500">Card spacing</p>
                    <p class="mt-1 text-base text-gray-900">24px internal padding with 16px border radius</p>
                </div>
                <div>
                    <p class="text-sm font-medium text-gray-500">Content width</p>
                    <p class="mt-1 text-base text-gray-900">Max-width {{ data_get($theme, 'container_width', '1200') }}px for improved readability across devices</p>
                </div>
            </div>
        </section>

        <div class="flex justify-end">
            <button type="submit" class="rounded-lg bg-gray-900 px-4 py-2.5 text-sm font-medium text-white hover:bg-gray-800">Save layout</button>
        </div>
    </form>
@endsection

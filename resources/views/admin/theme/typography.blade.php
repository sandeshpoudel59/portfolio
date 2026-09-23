@extends('admin.layouts.app')

@section('title', 'Typography')
@section('admin-topbar-title', 'Typography')

@section('content')
    @include('admin.layouts.partials.page-header', [
        'title' => 'Typography',
        'description' => 'Manage the type scale and font styling used across your portfolio.',
    ])

    <form method="POST" action="{{ route('admin.theme.typography.update') }}" class="space-y-6">
        @csrf

        <section class="rounded-2xl border border-gray-200 bg-white p-6 shadow-sm">
            <h2 class="text-lg font-semibold text-gray-900">Font family</h2>
            <div class="mt-5 grid gap-5 md:grid-cols-2">
                <div>
                    <label for="font_family" class="mb-2 block text-sm font-medium text-gray-700">Font family</label>
                    <input id="font_family" name="font_family" value="{{ data_get($theme, 'font_family', 'Instrument Sans') }}" class="w-full rounded-lg border border-gray-200 bg-gray-50 px-3 py-2.5 text-gray-900 focus:border-gray-400 focus:outline-none" />
                </div>
                <div>
                    <label for="body_size" class="mb-2 block text-sm font-medium text-gray-700">Body size</label>
                    <input id="body_size" name="body_size" value="{{ data_get($theme, 'body_size', '16') }}" class="w-full rounded-lg border border-gray-200 bg-gray-50 px-3 py-2.5 text-gray-900 focus:border-gray-400 focus:outline-none" />
                </div>
            </div>
        </section>

        <section class="rounded-2xl border border-gray-200 bg-white p-6 shadow-sm">
            <h2 class="text-lg font-semibold text-gray-900">Type scale</h2>
            <div class="mt-5 space-y-4">
                <div>
                    <p class="text-xs uppercase tracking-[0.2em] text-gray-500">Heading 1</p>
                    <h3 class="mt-2 text-4xl font-bold tracking-tight text-gray-900" style="font-family: '{{ data_get($theme, 'font_family', 'Instrument Sans') }}', sans-serif;">Portfolio work</h3>
                </div>
                <div>
                    <p class="text-xs uppercase tracking-[0.2em] text-gray-500">Heading 2</p>
                    <h3 class="mt-2 text-2xl font-bold text-gray-900" style="font-family: '{{ data_get($theme, 'font_family', 'Instrument Sans') }}', sans-serif;">Selected projects</h3>
                </div>
                <div>
                    <p class="text-xs uppercase tracking-[0.2em] text-gray-500">Body</p>
                    <p class="mt-2 max-w-2xl text-base leading-7 text-gray-700" style="font-size: {{ data_get($theme, 'body_size', '16') }}px; font-family: '{{ data_get($theme, 'font_family', 'Instrument Sans') }}', sans-serif;">This is the standard body copy used throughout the website for project summaries, bios, and page content.</p>
                </div>
            </div>
        </section>

        <div class="flex justify-end">
            <button type="submit" class="rounded-lg bg-gray-900 px-4 py-2.5 text-sm font-medium text-white hover:bg-gray-800">Save typography</button>
        </div>
    </form>
@endsection

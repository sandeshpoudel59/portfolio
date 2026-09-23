@extends('admin.layouts.app')

@section('title', 'Theme Colors')
@section('admin-topbar-title', 'Theme Colors')

@section('content')
    @include('admin.layouts.partials.page-header', [
        'title' => 'Theme Colors',
        'description' => 'Update the primary colors used across your portfolio theme.',
    ])

    @push('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                document.querySelectorAll('[data-color-picker]').forEach(function (picker) {
                    const key = picker.getAttribute('data-color-picker');
                    const text = document.querySelector('[data-color-text="' + key + '"]');

                    if (!text) return;

                    picker.addEventListener('input', function () {
                        text.value = picker.value;
                    });

                    text.addEventListener('input', function () {
                        if (/^#([0-9A-Fa-f]{3}|[0-9A-Fa-f]{6})$/.test(text.value.trim())) {
                            picker.value = text.value.trim();
                        }
                    });
                });
            });
        </script>
    @endpush

    <form method="POST" action="{{ route('admin.theme.colors.update') }}" class="space-y-6">
        @csrf

        <div class="grid gap-5 md:grid-cols-2 xl:grid-cols-4">
            @foreach([
                ['name' => 'Primary', 'key' => 'primary_color', 'value' => data_get($theme, 'primary_color', '#111827')],
                ['name' => 'Secondary', 'key' => 'secondary_color', 'value' => data_get($theme, 'secondary_color', '#6b7280')],
                ['name' => 'Accent', 'key' => 'accent_color', 'value' => data_get($theme, 'accent_color', '#f59e0b')],
                ['name' => 'Highlight', 'key' => 'highlight_color', 'value' => data_get($theme, 'highlight_color', '#6366f1')],
            ] as $color)
                <label class="rounded-2xl border border-gray-200 bg-white p-4 shadow-sm">
                    <span class="block text-sm font-medium text-gray-700">{{ $color['name'] }}</span>
                    <div class="mt-3 flex items-center gap-3">
                        <input type="color" value="{{ $color['value'] }}" data-color-picker="{{ $color['key'] }}" class="h-12 w-14 cursor-pointer rounded-lg border border-gray-200 bg-white p-1" />
                        <input type="text" name="{{ $color['key'] }}" value="{{ $color['value'] }}" data-color-text="{{ $color['key'] }}" class="w-full rounded-lg border border-gray-200 bg-gray-50 px-3 py-2 text-sm text-gray-900 focus:border-gray-400 focus:outline-none" />
                    </div>
                </label>
            @endforeach
        </div>

        <section class="rounded-2xl border border-gray-200 bg-white p-6 shadow-sm">
            <h2 class="text-lg font-semibold text-gray-900">Theme preview</h2>
            <div class="mt-5 rounded-2xl bg-slate-900 p-6 text-white" style="background-color: {{ data_get($theme, 'primary_color', '#111827') }};">
                <p class="text-xs font-medium uppercase tracking-[0.2em] text-slate-300">Portfolio</p>
                <h3 class="mt-3 text-3xl font-bold tracking-tight">Your brand, beautifully presented.</h3>
                <p class="mt-3 max-w-xl text-sm text-slate-300">This preview shows how the primary and accent colors work together across the public portfolio.</p>
                <div class="mt-6 flex gap-3">
                    <button type="button" class="rounded-lg px-4 py-2 text-sm font-semibold text-slate-900" style="background-color: {{ data_get($theme, 'accent_color', '#f59e0b') }};">Primary action</button>
                    <button type="button" class="rounded-lg border border-slate-600 px-4 py-2 text-sm font-medium text-white" style="border-color: {{ data_get($theme, 'highlight_color', '#6366f1') }};">Secondary action</button>
                </div>
            </div>
        </section>

        <div class="flex justify-end">
            <button type="submit" class="rounded-lg bg-gray-900 px-4 py-2.5 text-sm font-medium text-white hover:bg-gray-800">Save colors</button>
        </div>
    </form>
@endsection

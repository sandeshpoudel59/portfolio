@extends('admin.layouts.app')

@section('title', 'Theme Colors')
@section('admin-topbar-title', 'Theme Colors')

@section('content')
    @include('admin.layouts.partials.page-header', [
        'title' => 'Theme Colors',
        'description' => 'Update the primary colors used across your portfolio theme.',
    ])

    <div class="space-y-6">
        <section class="rounded-2xl border border-gray-200 bg-white p-6 shadow-sm">
            <h2 class="text-lg font-semibold text-gray-900">Brand palette</h2>
            <div class="mt-5 grid gap-5 md:grid-cols-2 xl:grid-cols-4">
                @foreach([
                    ['name' => 'Primary', 'hex' => '#111827', 'swatch' => 'bg-slate-900'],
                    ['name' => 'Secondary', 'hex' => '#6b7280', 'swatch' => 'bg-gray-500'],
                    ['name' => 'Accent', 'hex' => '#f59e0b', 'swatch' => 'bg-amber-400'],
                    ['name' => 'Highlight', 'hex' => '#6366f1', 'swatch' => 'bg-indigo-500'],
                ] as $color)
                    <div class="rounded-xl border border-gray-200 p-4">
                        <div class="h-16 rounded-lg {{ $color['swatch'] }}"></div>
                        <p class="mt-4 text-sm font-medium text-gray-900">{{ $color['name'] }}</p>
                        <p class="text-sm text-gray-500">{{ $color['hex'] }}</p>
                    </div>
                @endforeach
            </div>
        </section>

        <section class="rounded-2xl border border-gray-200 bg-white p-6 shadow-sm">
            <h2 class="text-lg font-semibold text-gray-900">Theme preview</h2>
            <div class="mt-5 rounded-2xl bg-slate-900 p-6 text-white">
                <p class="text-xs font-medium uppercase tracking-[0.2em] text-slate-300">Portfolio</p>
                <h3 class="mt-3 text-3xl font-bold tracking-tight">Your brand, beautifully presented.</h3>
                <p class="mt-3 max-w-xl text-sm text-slate-300">This preview shows how the primary and accent colors work together across the public portfolio.</p>
                <div class="mt-6 flex gap-3">
                    <button class="rounded-lg bg-amber-400 px-4 py-2 text-sm font-semibold text-slate-900">Primary action</button>
                    <button class="rounded-lg border border-slate-600 px-4 py-2 text-sm font-medium text-white">Secondary action</button>
                </div>
            </div>
        </section>
    </div>
@endsection

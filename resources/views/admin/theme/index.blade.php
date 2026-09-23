@extends('admin.layouts.app')

@section('title', 'Theme')
@section('admin-topbar-title', 'Theme')

@section('content')
    @include('admin.layouts.partials.page-header', [
        'title' => 'Theme',
        'description' => 'Customize your portfolio appearance including colors, typography, layout, and advanced styling.',
    ])

    <div class="grid gap-5 xl:grid-cols-2">
        <a href="{{ route('admin.theme.colors') }}" class="group rounded-2xl border border-gray-200 bg-white p-6 shadow-sm transition hover:border-gray-300 hover:shadow-md">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm font-semibold uppercase tracking-[0.18em] text-gray-500">Colors</p>
                    <h2 class="mt-3 text-2xl font-bold text-gray-900">Brand palette</h2>
                </div>
                <span class="rounded-full border border-gray-200 bg-gray-50 p-2 text-gray-700 transition group-hover:border-gray-300 group-hover:bg-gray-100">→</span>
            </div>
            <div class="mt-6 flex gap-3">
                <span class="h-12 w-12 rounded-full bg-slate-900"></span>
                <span class="h-12 w-12 rounded-full bg-gray-300"></span>
                <span class="h-12 w-12 rounded-full bg-amber-400"></span>
                <span class="h-12 w-12 rounded-full bg-indigo-500"></span>
            </div>
            <p class="mt-5 text-sm leading-6 text-gray-600">Adjust your primary colors and accent tones to match your brand identity.</p>
        </a>

        <a href="{{ route('admin.theme.typography') }}" class="group rounded-2xl border border-gray-200 bg-white p-6 shadow-sm transition hover:border-gray-300 hover:shadow-md">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm font-semibold uppercase tracking-[0.18em] text-gray-500">Typography</p>
                    <h2 class="mt-3 text-2xl font-bold text-gray-900">Font styles</h2>
                </div>
                <span class="rounded-full border border-gray-200 bg-gray-50 p-2 text-gray-700 transition group-hover:border-gray-300 group-hover:bg-gray-100">→</span>
            </div>
            <div class="mt-6 rounded-xl bg-gray-50 p-4">
                <p class="text-xs font-medium uppercase tracking-[0.2em] text-gray-500">Aa</p>
                <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900">Instrument Sans</p>
                <p class="mt-2 text-sm text-gray-600">Clean, modern typography for a polished personal brand.</p>
            </div>
        </a>

        <a href="{{ route('admin.theme.layout') }}" class="group rounded-2xl border border-gray-200 bg-white p-6 shadow-sm transition hover:border-gray-300 hover:shadow-md">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm font-semibold uppercase tracking-[0.18em] text-gray-500">Layout</p>
                    <h2 class="mt-3 text-2xl font-bold text-gray-900">Page structure</h2>
                </div>
                <span class="rounded-full border border-gray-200 bg-gray-50 p-2 text-gray-700 transition group-hover:border-gray-300 group-hover:bg-gray-100">→</span>
            </div>
            <div class="mt-6 space-y-3">
                <div class="h-3 w-full rounded-full bg-gray-200"></div>
                <div class="grid grid-cols-4 gap-2">
                    <div class="h-16 rounded-xl bg-gray-200"></div>
                    <div class="h-16 rounded-xl bg-gray-200"></div>
                    <div class="h-16 rounded-xl bg-gray-200"></div>
                    <div class="h-16 rounded-xl bg-gray-200"></div>
                </div>
            </div>
            <p class="mt-5 text-sm leading-6 text-gray-600">Refine section spacing, container widths, and overall composition.</p>
        </a>

        <a href="{{ route('admin.theme.custom-css') }}" class="group rounded-2xl border border-gray-200 bg-white p-6 shadow-sm transition hover:border-gray-300 hover:shadow-md">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm font-semibold uppercase tracking-[0.18em] text-gray-500">Custom CSS</p>
                    <h2 class="mt-3 text-2xl font-bold text-gray-900">Advanced styling</h2>
                </div>
                <span class="rounded-full border border-gray-200 bg-gray-50 p-2 text-gray-700 transition group-hover:border-gray-300 group-hover:bg-gray-100">→</span>
            </div>
            <div class="mt-6 rounded-xl border border-gray-200 bg-slate-900 p-4 font-mono text-xs text-slate-200">
                <div>.hero-title {</div>
                <div class="pl-4 text-amber-300">color: #f59e0b;</div>
                <div class="pl-4 text-indigo-300">letter-spacing: 0.04em;</div>
                <div>}</div>
            </div>
            <p class="mt-5 text-sm leading-6 text-gray-600">Add custom CSS for one-off visual tweaks and brand-specific design details.</p>
        </a>
    </div>
@endsection

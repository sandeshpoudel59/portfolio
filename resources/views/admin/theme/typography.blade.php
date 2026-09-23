@extends('admin.layouts.app')

@section('title', 'Typography')
@section('admin-topbar-title', 'Typography')

@section('content')
    @include('admin.layouts.partials.page-header', [
        'title' => 'Typography',
        'description' => 'Manage the type scale and font styling used across your portfolio.',
    ])

    <div class="space-y-6">
        <section class="rounded-2xl border border-gray-200 bg-white p-6 shadow-sm">
            <h2 class="text-lg font-semibold text-gray-900">Font family</h2>
            <div class="mt-5 rounded-xl bg-gray-50 p-5">
                <p class="text-xs font-medium uppercase tracking-[0.2em] text-gray-500">Current primary font</p>
                <p class="mt-3 text-4xl font-bold tracking-tight text-gray-900">Instrument Sans</p>
                <p class="mt-3 text-base text-gray-600">A modern sans-serif style designed for clarity and a polished, professional feel.</p>
            </div>
        </section>

        <section class="rounded-2xl border border-gray-200 bg-white p-6 shadow-sm">
            <h2 class="text-lg font-semibold text-gray-900">Type scale</h2>
            <div class="mt-5 space-y-4">
                <div>
                    <p class="text-xs uppercase tracking-[0.2em] text-gray-500">Heading 1</p>
                    <h3 class="mt-2 text-4xl font-bold tracking-tight text-gray-900">Portfolio work</h3>
                </div>
                <div>
                    <p class="text-xs uppercase tracking-[0.2em] text-gray-500">Heading 2</p>
                    <h3 class="mt-2 text-2xl font-bold text-gray-900">Selected projects</h3>
                </div>
                <div>
                    <p class="text-xs uppercase tracking-[0.2em] text-gray-500">Body</p>
                    <p class="mt-2 max-w-2xl text-base leading-7 text-gray-700">This is the standard body copy used throughout the website for project summaries, bios, and page content.</p>
                </div>
            </div>
        </section>
    </div>
@endsection

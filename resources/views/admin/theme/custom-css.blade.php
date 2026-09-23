@extends('admin.layouts.app')

@section('title', 'Custom CSS')
@section('admin-topbar-title', 'Custom CSS')

@section('content')
    @include('admin.layouts.partials.page-header', [
        'title' => 'Custom CSS',
        'description' => 'Add custom styling rules for refined final tweaks to the public portfolio.',
    ])

    <form method="POST" action="{{ route('admin.theme.custom-css.update') }}">
        @csrf

        <section class="rounded-2xl border border-gray-200 bg-white p-6 shadow-sm">
            <h2 class="text-lg font-semibold text-gray-900">CSS editor</h2>
            <p class="mt-2 text-sm text-gray-600">Use this area to place advanced custom rules that are not covered by the standard theme settings.</p>

            <textarea name="custom_css" rows="18" class="mt-5 w-full rounded-xl border border-gray-200 bg-slate-900 p-4 font-mono text-sm leading-7 text-slate-200 focus:border-gray-400 focus:outline-none" spellcheck="false">{{ data_get($theme, 'custom_css', ".hero-title {\n    color: #f59e0b;\n    letter-spacing: 0.04em;\n}\n\n.section-card {\n    border-radius: 1rem;\n    box-shadow: 0 10px 30px rgba(15, 23, 42, 0.08);\n}") }}</textarea>
        </section>

        <div class="mt-6 flex justify-end">
            <button type="submit" class="rounded-lg bg-gray-900 px-4 py-2.5 text-sm font-medium text-white hover:bg-gray-800">Save custom CSS</button>
        </div>
    </form>
@endsection

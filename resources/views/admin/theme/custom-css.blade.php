@extends('admin.layouts.app')

@section('title', 'Custom CSS')
@section('admin-topbar-title', 'Custom CSS')

@section('content')
    @include('admin.layouts.partials.page-header', [
        'title' => 'Custom CSS',
        'description' => 'Add custom styling rules for refined final tweaks to the public portfolio.',
    ])

    <section class="rounded-2xl border border-gray-200 bg-white p-6 shadow-sm">
        <h2 class="text-lg font-semibold text-gray-900">CSS editor</h2>
        <p class="mt-2 text-sm text-gray-600">Use this area to place advanced custom rules that are not covered by the standard theme settings.</p>

        <div class="mt-5 rounded-xl border border-gray-200 bg-slate-900 p-4">
            <pre class="overflow-x-auto font-mono text-sm leading-7 text-slate-200"><code>.hero-title {
    color: #f59e0b;
    letter-spacing: 0.04em;
}

.section-card {
    border-radius: 1rem;
    box-shadow: 0 10px 30px rgba(15, 23, 42, 0.08);
}</code></pre>
        </div>
    </section>
@endsection

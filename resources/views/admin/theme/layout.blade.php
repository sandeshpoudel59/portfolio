@extends('admin.layouts.app')

@section('title', 'Layout')
@section('admin-topbar-title', 'Layout')

@section('content')
    @include('admin.layouts.partials.page-header', [
        'title' => 'Layout',
        'description' => 'Review the overall structure and spacing used throughout the portfolio design.',
    ])

    <div class="space-y-6">
        <section class="rounded-2xl border border-gray-200 bg-white p-6 shadow-sm">
            <h2 class="text-lg font-semibold text-gray-900">General layout</h2>
            <div class="mt-5 rounded-2xl border border-gray-200 bg-gray-50 p-5">
                <div class="mb-4 h-3 w-32 rounded-full bg-gray-300"></div>
                <div class="grid gap-3 md:grid-cols-3">
                    <div class="h-24 rounded-xl bg-white shadow-sm"></div>
                    <div class="h-24 rounded-xl bg-white shadow-sm"></div>
                    <div class="h-24 rounded-xl bg-white shadow-sm"></div>
                </div>
            </div>
        </section>

        <section class="rounded-2xl border border-gray-200 bg-white p-6 shadow-sm">
            <h2 class="text-lg font-semibold text-gray-900">Spacing system</h2>
            <div class="mt-5 space-y-4">
                <div>
                    <p class="text-sm font-medium text-gray-500">Section padding</p>
                    <p class="mt-1 text-base text-gray-900">64px desktop / 32px mobile</p>
                </div>
                <div>
                    <p class="text-sm font-medium text-gray-500">Card spacing</p>
                    <p class="mt-1 text-base text-gray-900">24px internal padding with 16px border radius</p>
                </div>
                <div>
                    <p class="text-sm font-medium text-gray-500">Content width</p>
                    <p class="mt-1 text-base text-gray-900">Max-width container for improved readability across devices</p>
                </div>
            </div>
        </section>
    </div>
@endsection

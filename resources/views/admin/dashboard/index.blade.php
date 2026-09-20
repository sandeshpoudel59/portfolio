@extends('admin.layouts.app')

@section('title', 'Dashboard')

@section('admin-topbar-title', 'Dashboard')

@section('content')

@include('admin.layouts.partials.page-header', [
    'title' => 'Dashboard',
    'description' => 'Manage your portfolio website and content from one place.',
])

<div class="grid gap-4 sm:grid-cols-2 xl:grid-cols-4">

    <a
        href="{{ route('admin.dashboard') }}"
        class="rounded-xl border border-gray-200 bg-white p-5 shadow-sm transition hover:border-gray-300 hover:shadow"
    >
        <p class="text-sm font-medium text-gray-500">
            Projects
        </p>

        <p class="mt-2 text-3xl font-bold text-gray-900">
            {{ count(data_get($personData, 'projects', [])) }}
        </p>

        <p class="mt-2 text-xs text-gray-500">
            Manage portfolio projects
        </p>
    </a>

    <a
        href="{{ route('admin.portfolio.edit') }}"
        class="rounded-xl border border-gray-200 bg-white p-5 shadow-sm transition hover:border-gray-300 hover:shadow"
    >
        <p class="text-sm font-medium text-gray-500">Profile</p>
        <p class="mt-2 truncate text-lg font-bold text-gray-900">
            {{ data_get($personData, 'personal.fullName', 'Not configured') }}
        </p>
        <p class="mt-2 text-xs text-gray-500">Edit portfolio information</p>
    </a>

    <a
        href="{{ route('admin.portfolio.edit') }}"
        class="rounded-xl border border-gray-200 bg-white p-5 shadow-sm transition hover:border-gray-300 hover:shadow"
    >
        <p class="text-sm font-medium text-gray-500">Experience</p>
        <p class="mt-2 text-3xl font-bold text-gray-900">
            {{ count(data_get($personData, 'experience', [])) }}
        </p>
        <p class="mt-2 text-xs text-gray-500">Manage portfolio information</p>
    </a>

    <a
        href="{{ route('admin.portfolio.edit') }}"
        class="rounded-xl border border-gray-200 bg-white p-5 shadow-sm transition hover:border-gray-300 hover:shadow"
    >
        <p class="text-sm font-medium text-gray-500">Skills</p>
        <p class="mt-2 text-3xl font-bold text-gray-900">
            {{ count(data_get($personData, 'skills.technical', [])) }}
        </p>
        <p class="mt-2 text-xs text-gray-500">Manage portfolio information</p>
    </a>
</div>

{{-- Website Status --}}
<section class="mt-6 rounded-xl border border-gray-200 bg-white shadow-sm">

    <div class="border-b border-gray-200 px-5 py-4">
        <h2 class="font-semibold text-gray-900">
            Website
        </h2>
    </div>

    <div class="grid gap-5 p-5 sm:grid-cols-3">

        <div>
            <p class="text-xs font-medium uppercase tracking-wider text-gray-400">
                Environment
            </p>

            <p class="mt-1 text-sm font-medium text-gray-900">
                {{ app()->environment() }}
            </p>
        </div>

        <div>
            <p class="text-xs font-medium uppercase tracking-wider text-gray-400">
                Application
            </p>

            <p class="mt-1 text-sm font-medium text-gray-900">
                {{ config('app.name') }}
            </p>
        </div>

        <div>
            <p class="text-xs font-medium uppercase tracking-wider text-gray-400">
                Website
            </p>

            <a
                href="{{ route('home') }}"
                target="_blank"
                rel="noopener noreferrer"
                class="mt-1 inline-block text-sm font-medium text-gray-900 hover:underline"
            >
                Open public website →
            </a>
        </div>

    </div>

</section>
@endsection
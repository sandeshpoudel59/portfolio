@extends('admin.layouts.app')

@section('title', 'Dashboard')

@section('page-title', 'Dashboard')

@section('content')

    <div class="space-y-8">

        {{-- Welcome --}}
        <div>

            <h2 class="text-2xl font-bold tracking-tight text-gray-900">
                Welcome back, {{ auth()->user()->name ?? 'Administrator' }}
            </h2>

            <p class="mt-1 text-sm text-gray-500">
                Manage your portfolio website from this dashboard.
            </p>

        </div>

        {{-- Statistics --}}
        <div class="grid gap-6 sm:grid-cols-2 xl:grid-cols-4">

            <div class="rounded-xl border border-gray-200 bg-white p-6 shadow-sm">

                <p class="text-sm font-medium text-gray-500">
                    Projects
                </p>

                <p class="mt-2 text-3xl font-bold text-gray-900">
                    0
                </p>

                <p class="mt-1 text-xs text-gray-500">
                    Portfolio projects
                </p>

            </div>

            <div class="rounded-xl border border-gray-200 bg-white p-6 shadow-sm">

                <p class="text-sm font-medium text-gray-500">
                    Experience
                </p>

                <p class="mt-2 text-3xl font-bold text-gray-900">
                    0
                </p>

                <p class="mt-1 text-xs text-gray-500">
                    Career entries
                </p>

            </div>

            <div class="rounded-xl border border-gray-200 bg-white p-6 shadow-sm">

                <p class="text-sm font-medium text-gray-500">
                    Skills
                </p>

                <p class="mt-2 text-3xl font-bold text-gray-900">
                    0
                </p>

                <p class="mt-1 text-xs text-gray-500">
                    Listed skills
                </p>

            </div>

            <div class="rounded-xl border border-gray-200 bg-white p-6 shadow-sm">

                <p class="text-sm font-medium text-gray-500">
                    Blog Posts
                </p>

                <p class="mt-2 text-3xl font-bold text-gray-900">
                    0
                </p>

                <p class="mt-1 text-xs text-gray-500">
                    Published articles
                </p>

            </div>

        </div>

        {{-- Quick Actions --}}
        <div>

            <h3 class="text-lg font-semibold text-gray-900">
                Quick Actions
            </h3>

            <div class="mt-4 grid gap-4 sm:grid-cols-2 lg:grid-cols-4">

                <a
                    href="#"
                    class="rounded-xl border border-gray-200 bg-white p-5 shadow-sm transition hover:-translate-y-0.5 hover:border-gray-300 hover:shadow"
                >

                    <p class="font-semibold text-gray-900">
                        Edit Profile
                    </p>

                    <p class="mt-1 text-sm text-gray-500">
                        Update your personal information.
                    </p>

                </a>

                <a
                    href="#"
                    class="rounded-xl border border-gray-200 bg-white p-5 shadow-sm transition hover:-translate-y-0.5 hover:border-gray-300 hover:shadow"
                >

                    <p class="font-semibold text-gray-900">
                        Add Project
                    </p>

                    <p class="mt-1 text-sm text-gray-500">
                        Add a new portfolio project.
                    </p>

                </a>

                <a
                    href="#"
                    class="rounded-xl border border-gray-200 bg-white p-5 shadow-sm transition hover:-translate-y-0.5 hover:border-gray-300 hover:shadow"
                >

                    <p class="font-semibold text-gray-900">
                        Add Experience
                    </p>

                    <p class="mt-1 text-sm text-gray-500">
                        Add a career experience entry.
                    </p>

                </a>

                <a
                    href="#"
                    class="rounded-xl border border-gray-200 bg-white p-5 shadow-sm transition hover:-translate-y-0.5 hover:border-gray-300 hover:shadow"
                >

                    <p class="font-semibold text-gray-900">
                        Write Blog
                    </p>

                    <p class="mt-1 text-sm text-gray-500">
                        Create a new blog article.
                    </p>

                </a>

            </div>

        </div>

        {{-- System status --}}
        <div class="rounded-xl border border-gray-200 bg-white shadow-sm">

            <div class="border-b border-gray-200 px-6 py-5">

                <h3 class="font-semibold text-gray-900">
                    System Status
                </h3>

            </div>

            <div class="divide-y divide-gray-100">

                <div class="flex items-center justify-between px-6 py-4">

                    <span class="text-sm text-gray-600">
                        Laravel
                    </span>

                    <span class="rounded-full bg-green-100 px-3 py-1 text-xs font-medium text-green-700">
                        {{ app()->version() }}
                    </span>

                </div>

                <div class="flex items-center justify-between px-6 py-4">

                    <span class="text-sm text-gray-600">
                        PHP
                    </span>

                    <span class="rounded-full bg-green-100 px-3 py-1 text-xs font-medium text-green-700">
                        {{ PHP_VERSION }}
                    </span>

                </div>

                <div class="flex items-center justify-between px-6 py-4">

                    <span class="text-sm text-gray-600">
                        Environment
                    </span>

                    <span class="rounded-full bg-blue-100 px-3 py-1 text-xs font-medium text-blue-700">
                        {{ app()->environment() }}
                    </span>

                </div>

            </div>

        </div>

    </div>

@endsection
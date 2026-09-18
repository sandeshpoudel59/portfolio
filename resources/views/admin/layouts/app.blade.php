<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">

<meta
    name="viewport"
    content="width=device-width, initial-scale=1"
>

<meta
    name="csrf-token"
    content="{{ csrf_token() }}"
>

<title>
    @hasSection('title')
        @yield('title') -
    @endif
    {{ config('app.name', 'Portfolio Admin') }}
</title>

@stack('meta')

@vite([
    'resources/css/app.css',
    'resources/js/app.js',
])

@stack('styles')

</head>

<body class="min-h-screen bg-gray-100 text-gray-900 antialiased">

<div class="flex min-h-screen">

    {{-- =========================================================
         Sidebar
    ========================================================== --}}
    <x-admin.layout.sidebar />

    {{-- =========================================================
         Main Application Area
    ========================================================== --}}
    <div class="flex min-w-0 flex-1 flex-col">

        {{-- =====================================================
             Topbar
        ====================================================== --}}
        <x-admin.layout.topbar />

        {{-- =====================================================
             Notifications
        ====================================================== --}}
        @include('admin.layouts.partials.notifications')

        {{-- =====================================================
             Main Content
        ====================================================== --}}
        <main class="flex-1">

            {{-- Page Header --}}
            @hasSection('page-header')
                <div class="border-b border-gray-200 bg-white">
                    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                        @yield('page-header')
                    </div>
                </div>
            @endif

            {{-- Page Content --}}
            <div class="mx-auto w-full max-w-7xl px-4 py-6 sm:px-6 lg:px-8">

                @yield('content')

            </div>

        </main>

        {{-- =====================================================
             Footer
        ====================================================== --}}
        @include('admin.layouts.partials.footer')

    </div>

</div>

@stack('scripts')
</body>

</html>
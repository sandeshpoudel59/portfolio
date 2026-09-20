<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        @yield('title', 'Admin')
        - {{ config('app.name', 'Portfolio') }}
    </title>

    <meta name="robots" content="noindex, nofollow">

    @vite([
        'resources/css/app.css',
        'resources/js/app.js'
    ])

    @stack('head')
</head>

<body class="min-h-screen bg-gray-100 text-gray-900 antialiased">

    <div class="min-h-screen">

        {{-- Sidebar --}}
        @include('admin.layouts.partials.sidebar')

        {{-- Main Area --}}
        <div class="lg:pl-72">

            {{-- Topbar --}}
            @include('admin.layouts.partials.topbar')

            {{-- Notifications --}}
            @include('admin.layouts.partials.notifications')

            {{-- Main Content --}}
            <main class="min-h-[calc(100vh-4rem)] p-4 sm:p-6 lg:p-8">
                @yield('content')
            </main>

            {{-- Footer --}}
            @include('admin.layouts.partials.footer')

        </div>

    </div>

    @stack('scripts')

</body>
</html>
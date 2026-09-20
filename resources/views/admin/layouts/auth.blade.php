<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        @yield('title', 'Authentication')
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

    <main class="flex min-h-screen items-center justify-center p-4 sm:p-6">
        <div class="w-full max-w-md">

            {{-- Brand --}}
            <div class="mb-8 text-center">
                <a
                    href="{{ route('home') }}"
                    class="text-2xl font-bold tracking-tight text-gray-900"
                >
                    {{ config('app.name', 'Portfolio') }}
                </a>

                <p class="mt-2 text-sm text-gray-500">
                    Administration
                </p>
            </div>

            {{-- Notifications --}}
            @include('admin.layouts.partials.notifications')

            @yield('content')

        </div>
    </main>

    @stack('scripts')

</body>
</html>
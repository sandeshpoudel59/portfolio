<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Admin') - {{ config('app.name') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('head')
</head>

<body class="min-h-screen bg-gray-100 text-gray-900 antialiased">
    <div class="min-h-screen lg:flex">

        <x-admin.layout.sidebar />

        <div class="min-w-0 flex-1">
            <x-admin.layout.topbar />

            <main class="p-4 sm:p-6 lg:p-8">
                @if (session('success'))
                    <x-admin.ui.alert type="success" :message="session('success')" />
                @endif

                @if (session('error'))
                    <x-admin.ui.alert type="error" :message="session('error')" />
                @endif

                @if ($errors->any())
                    <x-admin.ui.alert type="error">
                        <ul class="list-disc space-y-1 pl-5">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </x-admin.ui.alert>
                @endif

                @yield('content')
            </main>
        </div>
    </div>

    @stack('scripts')
</body>
</html>

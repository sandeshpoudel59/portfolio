<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    {{-- Basic SEO --}}
    <x-seo.meta />

    {{-- Open Graph + Twitter/X --}}
    <x-seo.og-meta />

    {{-- Structured Data --}}
    <x-seo.json-ld />

    {{-- Assets --}}
    @vite([
        'resources/css/app.css',
        'resources/js/app.js'
    ])

    @stack('head')

</head>

<body class="min-h-screen bg-white text-gray-900 antialiased">

    {{-- Global Header --}}
    @include('components.global.header')


    {{-- Page Content --}}
    <main>
        @yield('content')
    </main>


    {{-- Global Footer --}}
    @include('components.global.footer')


    {{-- Additional JavaScript --}}
    @stack('scripts')

</body>

</html>
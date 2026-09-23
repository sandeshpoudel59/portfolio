<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    @php
        $theme = $personData['theme'] ?? [];
    @endphp

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

    @if (!empty($theme['custom_css']))
        <style>{!! $theme['custom_css'] !!}</style>
    @endif

    @stack('head')

</head>

<body class="min-h-screen antialiased" style="background-color: {{ data_get($personData ?? [], 'theme.background_color', '#ffffff') }}; color: {{ data_get($personData ?? [], 'theme.text_color', '#111827') }}; font-family: '{{ data_get($personData ?? [], 'theme.font_family', 'Instrument Sans') }}', sans-serif;">

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
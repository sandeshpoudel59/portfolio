<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">


<meta
    name="viewport"
    content="width=device-width, initial-scale=1.0"
>

<title>
    @yield('title', 'Admin Login') - {{ config('app.name', 'Portfolio') }}
</title>

@vite(['resources/css/app.css', 'resources/js/app.js'])


</head>

<body class="min-h-screen bg-gray-100">


<main class="flex min-h-screen items-center justify-center px-4 py-12">

    <div class="w-full max-w-md">

        @yield('content')

    </div>

</main>


</body>

</html>

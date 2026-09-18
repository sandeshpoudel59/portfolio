@extends('admin.layouts.auth')

@section('title', 'Admin Login')

@section('content')

<div class="w-full max-w-md">


{{-- Logo / Brand --}}
<div class="mb-8 text-center">
    <a href="{{ url('/') }}" class="inline-block">
        <h1 class="text-2xl font-bold tracking-tight text-gray-900">
            {{ config('app.name', 'Portfolio') }}
        </h1>
    </a>

    <p class="mt-2 text-sm text-gray-600">
        Sign in to access the admin dashboard
    </p>
</div>

{{-- Login Card --}}
<div class="rounded-2xl border border-gray-200 bg-white p-8 shadow-sm">

    {{-- General Error --}}
    @if(session('error'))
        <div class="mb-6 rounded-lg border border-red-200 bg-red-50 p-4 text-sm text-red-700">
            {{ session('error') }}
        </div>
    @endif

    {{-- Success Message --}}
    @if(session('success'))
        <div class="mb-6 rounded-lg border border-green-200 bg-green-50 p-4 text-sm text-green-700">
            {{ session('success') }}
        </div>
    @endif

    {{-- Validation Errors --}}
    @if(isset($errors) && $errors->any())
        <div class="mb-6 rounded-lg border border-red-200 bg-red-50 p-4">
            <p class="mb-2 text-sm font-medium text-red-800">
                Please fix the following errors:
            </p>

            <ul class="list-inside list-disc text-sm text-red-700">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('login') }}" class="space-y-6">
        @csrf

        {{-- Email --}}
        <div>
            <label
                for="email"
                class="mb-2 block text-sm font-medium text-gray-700"
            >
                Email Address
            </label>

            <input
                id="email"
                type="email"
                name="email"
                value="{{ old('email') }}"
                required
                autofocus
                autocomplete="email"
                placeholder="admin@example.com"
                class="block w-full rounded-lg border border-gray-300 px-4 py-3 text-sm text-gray-900 outline-none transition placeholder:text-gray-400 focus:border-gray-900 focus:ring-2 focus:ring-gray-900/10"
            >

            @if(isset($errors) && $errors->has('email'))
                <p class="mt-2 text-sm text-red-600">
                    {{ $errors->first('email') }}
                </p>
            @endif
        </div>

        {{-- Password --}}
        <div>
            <div class="mb-2 flex items-center justify-between">
                <label
                    for="password"
                    class="block text-sm font-medium text-gray-700"
                >
                    Password
                </label>

                @if(Route::has('password.request'))
                    <a
                        href="{{ route('password.request') }}"
                        class="text-sm font-medium text-gray-700 hover:text-gray-900"
                    >
                        Forgot password?
                    </a>
                @endif
            </div>

            <input
                id="password"
                type="password"
                name="password"
                required
                autocomplete="current-password"
                placeholder="Enter your password"
                class="block w-full rounded-lg border border-gray-300 px-4 py-3 text-sm text-gray-900 outline-none transition placeholder:text-gray-400 focus:border-gray-900 focus:ring-2 focus:ring-gray-900/10"
            >

            @if(isset($errors) && $errors->has('password'))
                <p class="mt-2 text-sm text-red-600">
                    {{ $errors->first('password') }}
                </p>
            @endif
        </div>

        {{-- Remember Me --}}
        <div class="flex items-center">
            <input
                id="remember"
                type="checkbox"
                name="remember"
                value="1"
                class="h-4 w-4 rounded border-gray-300 text-gray-900 focus:ring-gray-900"
            >

            <label
                for="remember"
                class="ml-2 text-sm text-gray-600"
            >
                Remember me
            </label>
        </div>

        {{-- Submit --}}
        <button
            type="submit"
            class="flex w-full items-center justify-center rounded-lg bg-gray-900 px-4 py-3 text-sm font-semibold text-white transition hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-900 focus:ring-offset-2"
        >
            Sign in
        </button>

    </form>

</div>

{{-- Back to Website --}}
<div class="mt-6 text-center">
    <a
        href="{{ route('home') }}"
        class="text-sm text-gray-500 transition hover:text-gray-900"
    >
        ← Back to website
    </a>
</div>


</div>

@endsection

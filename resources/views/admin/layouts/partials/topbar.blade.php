<header class="sticky top-0 z-30 border-b border-gray-200 bg-white">

    <div class="flex h-16 items-center justify-between px-4 sm:px-6 lg:px-8">

        {{-- Mobile menu --}}
        <button
            type="button"
            class="rounded-lg p-2 text-gray-600 hover:bg-gray-100 lg:hidden"
            onclick="document.getElementById('mobile-sidebar').classList.toggle('hidden')"
        >
            <span class="sr-only">Open menu</span>
            ☰
        </button>

        {{-- Page title --}}
        <div class="hidden lg:block">

            <h1 class="text-lg font-semibold text-gray-900">
                @yield('title', 'Dashboard')
            </h1>

        </div>

        <div class="flex items-center gap-4">

            {{-- Website --}}
            <a
                href="{{ route('home') }}"
                target="_blank"
                class="hidden text-sm font-medium text-gray-600 hover:text-gray-900 sm:block"
            >
                View Website
            </a>

            {{-- User --}}
            <div class="flex items-center gap-3">

                <div
                    class="flex h-9 w-9 items-center justify-center rounded-full bg-gray-900 text-sm font-semibold text-white"
                >
                    {{ strtoupper(substr(auth()->user()->name ?? 'A', 0, 1)) }}
                </div>

                <div class="hidden sm:block">

                    <p class="text-sm font-medium text-gray-900">
                        {{ auth()->user()->name ?? 'Administrator' }}
                    </p>

                    <p class="text-xs text-gray-500">
                        Administrator
                    </p>

                </div>

            </div>

            {{-- Logout --}}
            @auth
                <form
                    method="POST"
                    action="{{ route('logout') }}"
                >
                    @csrf

                    <button
                        type="submit"
                        class="text-sm font-medium text-red-600 hover:text-red-700"
                    >
                        Logout
                    </button>
                </form>
            @endauth

        </div>

    </div>

</header>
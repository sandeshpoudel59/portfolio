<header class="sticky top-0 z-30 h-16 border-b border-gray-200 bg-white/95 backdrop-blur">
    <div class="flex h-full items-center justify-between px-4 sm:px-6 lg:px-8">

        {{-- Mobile Brand --}}
        <div class="lg:hidden">
            <a
                href="{{ route('admin.dashboard') }}"
                class="font-bold tracking-tight text-gray-900"
            >
                Admin
            </a>
        </div>

        {{-- Desktop Page Context --}}
        <div class="hidden lg:block">
            <p class="text-sm font-medium text-gray-900">
                @yield('admin-topbar-title', 'Administration')
            </p>
        </div>

        {{-- User --}}
        <div class="flex items-center gap-4">

            <a
                href="{{ route('home') }}"
                target="_blank"
                rel="noopener noreferrer"
                class="hidden text-sm font-medium text-gray-600 hover:text-gray-900 sm:block"
            >
                View Website
            </a>

            <div class="flex items-center gap-3">

                <div class="hidden text-right sm:block">
                    <p class="text-sm font-medium text-gray-900">
                        {{ auth()->user()->name ?? 'Administrator' }}
                    </p>

                    <p class="text-xs text-gray-500">
                        {{ auth()->user()->email ?? '' }}
                    </p>
                </div>

                <div class="flex h-9 w-9 items-center justify-center rounded-full bg-gray-900 text-sm font-semibold text-white">
                    {{ strtoupper(substr(auth()->user()->name ?? 'A', 0, 1)) }}
                </div>

            </div>

        </div>

    </div>
</header>
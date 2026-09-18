<header class="sticky top-0 z-20 border-b border-gray-200 bg-white/95 backdrop-blur">
    <div class="flex h-16 items-center justify-between px-4 sm:px-6 lg:px-8">
        <div>
            <p class="text-sm font-medium text-gray-900">
                {{ auth()->user()->name ?? 'Admin' }}
            </p>
            <p class="text-xs text-gray-500">Administrator</p>
        </div>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit"
                    class="rounded-lg px-3 py-2 text-sm font-medium text-gray-600 hover:bg-gray-100 hover:text-gray-900">
                Logout
            </button>
        </form>
    </div>
</header>

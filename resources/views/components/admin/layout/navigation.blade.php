<nav class="flex-1 space-y-1 overflow-y-auto p-4">
    <a href="{{ route('admin.dashboard') }}"
       class="block rounded-lg px-3 py-2 text-sm font-medium {{ request()->routeIs('admin.dashboard') ? 'bg-gray-900 text-white' : 'text-gray-700 hover:bg-gray-100' }}">
        Dashboard
    </a>

    <a href="{{ route('admin.portfolio.edit') }}"
       class="block rounded-lg px-3 py-2 text-sm font-medium {{ request()->routeIs('admin.portfolio.*') ? 'bg-gray-900 text-white' : 'text-gray-700 hover:bg-gray-100' }}">
        Portfolio
    </a>
</nav>

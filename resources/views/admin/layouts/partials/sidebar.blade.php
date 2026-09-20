<aside
    id="admin-sidebar"
    class="fixed inset-y-0 left-0 z-40 hidden w-72 border-r border-gray-200 bg-white lg:block"
>
    <div class="flex h-full flex-col">

        {{-- Brand --}}
        <div class="flex h-16 shrink-0 items-center border-b border-gray-200 px-6">
            <a
                href="{{ route('admin.dashboard') }}"
                class="text-lg font-bold tracking-tight text-gray-900"
            >
                {{ config('app.name', 'Portfolio') }}
            </a>

            <span class="ml-2 rounded bg-gray-100 px-2 py-0.5 text-xs font-medium text-gray-500">
                Admin
            </span>
        </div>

        {{-- Navigation --}}
        <nav class="flex-1 overflow-y-auto px-4 py-5">

            {{-- Dashboard --}}
            <a
                href="{{ route('admin.dashboard') }}"
                class="mb-1 flex items-center rounded-lg px-3 py-2.5 text-sm font-medium transition
                {{ request()->routeIs('admin.dashboard')
                    ? 'bg-gray-900 text-white'
                    : 'text-gray-700 hover:bg-gray-100' }}"
            >
                <svg class="mr-3 h-5 w-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                        d="M3 12l9-9 9 9M5 10v10h14V10M9 20v-6h6v6"/>
                </svg>

                Dashboard
            </a>

            {{-- Portfolio --}}
            <a
                href="{{ route('admin.portfolio.edit') }}"
                class="mb-1 flex items-center rounded-lg px-3 py-2.5 text-sm font-medium transition
                {{ request()->routeIs('admin.portfolio.*')
                    ? 'bg-gray-900 text-white'
                    : 'text-gray-700 hover:bg-gray-100' }}"
            >
                <svg class="mr-3 h-5 w-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                        d="M12 20h9M16.5 3.5a2.121 2.121 0 013 3L7 19l-4 1 1-4L16.5 3.5z"/>
                </svg>

                Portfolio
            </a>

            {{-- Content --}}
            <div class="mt-7">

                <p class="mb-2 px-3 text-xs font-semibold uppercase tracking-wider text-gray-400">
                    Content
                </p>

                <div class="space-y-1">
                    @foreach ([
                        'projects' => 'Projects',
                        'experience' => 'Experience',
                        'education' => 'Education',
                        'achievements' => 'Achievements',
                        'certifications' => 'Certifications',
                        'services' => 'Services',
                    ] as $section => $label)
                        <a
                            href="{{ route('admin.content.index', $section) }}"
                            class="block rounded-lg px-3 py-2 text-sm font-medium transition
                            {{ request()->routeIs('admin.content.*') && request()->route('section') === $section
                                ? 'bg-gray-100 text-gray-900'
                                : 'text-gray-600 hover:bg-gray-100 hover:text-gray-900' }}"
                        >
                            {{ $label }}
                        </a>
                    @endforeach
                </div>
            </div>

        </nav>

        {{-- Bottom --}}
        <div class="shrink-0 border-t border-gray-200 p-4">

            <a
                href="{{ route('home') }}"
                target="_blank"
                rel="noopener noreferrer"
                class="mb-2 flex items-center rounded-lg px-3 py-2.5 text-sm font-medium text-gray-700 hover:bg-gray-100"
            >
                View Website
            </a>

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button
                    type="submit"
                    class="w-full rounded-lg px-3 py-2.5 text-left text-sm font-medium text-red-600 hover:bg-red-50"
                >
                    Logout
                </button>
            </form>

        </div>

    </div>
</aside>

{{-- Mobile Sidebar Button --}}
<div class="fixed bottom-5 right-5 z-50 lg:hidden">
    <button
        type="button"
        onclick="document.getElementById('admin-mobile-navigation').classList.toggle('hidden')"
        class="rounded-full bg-gray-900 p-4 text-white shadow-lg"
        aria-label="Open admin navigation"
    >
        ☰
    </button>
</div>

{{-- Mobile Navigation --}}
<div
    id="admin-mobile-navigation"
    class="fixed inset-0 z-40 hidden lg:hidden"
>
    <div class="absolute inset-0 bg-black/40"
         onclick="document.getElementById('admin-mobile-navigation').classList.add('hidden')">
    </div>

    <aside class="relative h-full w-72 bg-white shadow-xl">
        <div class="flex h-16 items-center border-b border-gray-200 px-6">
            <span class="font-bold">
                {{ config('app.name', 'Portfolio') }}
            </span>
        </div>

        <nav class="p-4">
            <a href="{{ route('admin.dashboard') }}"
               class="block rounded-lg px-3 py-3 text-sm font-medium hover:bg-gray-100">
                Dashboard
            </a>

            <a href="{{ route('admin.portfolio.edit') }}"
               class="block rounded-lg px-3 py-3 text-sm font-medium hover:bg-gray-100">
                Portfolio
            </a>

            @foreach ([
                'projects' => 'Projects',
                'experience' => 'Experience',
                'education' => 'Education',
                'achievements' => 'Achievements',
                'certifications' => 'Certifications',
                'services' => 'Services',
            ] as $section => $label)
                <a href="{{ route('admin.content.index', $section) }}"
                   class="block rounded-lg px-3 py-3 text-sm font-medium hover:bg-gray-100">
                    {{ $label }}
                </a>
            @endforeach
        </nav>
    </aside>
</div>
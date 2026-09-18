<aside
    id="admin-sidebar"
    class="fixed inset-y-0 left-0 z-40 hidden w-64 border-r border-gray-200 bg-white lg:block"
>
    <div class="flex h-full flex-col">

        {{-- Logo --}}
        <div class="flex h-16 items-center border-b border-gray-200 px-6">

            <a
                href="{{ route('admin.dashboard') }}"
                class="text-lg font-bold tracking-tight text-gray-900"
            >
                {{ config('app.name', 'Portfolio') }}
            </a>

        </div>

        {{-- Navigation --}}
        <nav class="flex-1 overflow-y-auto px-3 py-6">

            <p class="px-3 text-xs font-semibold uppercase tracking-wider text-gray-400">
                Main
            </p>

            <div class="mt-3 space-y-1">

                <a
                    href="{{ route('admin.dashboard') }}"
                    class="flex items-center gap-3 rounded-lg px-3 py-2 text-sm font-medium
                    {{ request()->routeIs('admin.dashboard')
                        ? 'bg-gray-900 text-white'
                        : 'text-gray-700 hover:bg-gray-100' }}"
                >
                    <span>Dashboard</span>
                </a>

            </div>

            <p class="mt-8 px-3 text-xs font-semibold uppercase tracking-wider text-gray-400">
                Portfolio
            </p>

            <div class="mt-3 space-y-1">

                <a
                    href="{{ route('admin.about.index') }}"
                    class="flex items-center rounded-lg px-3 py-2 text-sm font-medium
                    {{ request()->routeIs('admin.about.*')
                        ? 'bg-gray-900 text-white'
                        : 'text-gray-700 hover:bg-gray-100' }}"
                >
                    About
                </a>

                <a
                    href="{{ route('admin.projects.index') }}"
                    class="flex items-center rounded-lg px-3 py-2 text-sm font-medium
                    {{ request()->routeIs('admin.projects.*')
                        ? 'bg-gray-900 text-white'
                        : 'text-gray-700 hover:bg-gray-100' }}"
                >
                    Projects
                </a>

                <a
                    href="{{ route('admin.services.index') }}"
                    class="flex items-center rounded-lg px-3 py-2 text-sm font-medium
                    {{ request()->routeIs('admin.services.*')
                        ? 'bg-gray-900 text-white'
                        : 'text-gray-700 hover:bg-gray-100' }}"
                >
                    Services
                </a>

                <a
                    href="{{ route('admin.education.index') }}"
                    class="flex items-center rounded-lg px-3 py-2 text-sm font-medium
                    {{ request()->routeIs('admin.education.*')
                        ? 'bg-gray-900 text-white'
                        : 'text-gray-700 hover:bg-gray-100' }}"
                >
                    Education
                </a>

                <a
                    href="{{ route('admin.experience.index') }}"
                    class="flex items-center rounded-lg px-3 py-2 text-sm font-medium
                    {{ request()->routeIs('admin.experience.*')
                        ? 'bg-gray-900 text-white'
                        : 'text-gray-700 hover:bg-gray-100' }}"
                >
                    Experience
                </a>

                <a
                    href="{{ route('admin.skills.index') }}"
                    class="flex items-center rounded-lg px-3 py-2 text-sm font-medium
                    {{ request()->routeIs('admin.skills.*')
                        ? 'bg-gray-900 text-white'
                        : 'text-gray-700 hover:bg-gray-100' }}"
                >
                    Skills
                </a>

                <a
                    href="{{ route('admin.achievements.index') }}"
                    class="flex items-center rounded-lg px-3 py-2 text-sm font-medium
                    {{ request()->routeIs('admin.achievements.*')
                        ? 'bg-gray-900 text-white'
                        : 'text-gray-700 hover:bg-gray-100' }}"
                >
                    Achievements
                </a>

                <a
                    href="{{ route('admin.certifications.index') }}"
                    class="flex items-center rounded-lg px-3 py-2 text-sm font-medium
                    {{ request()->routeIs('admin.certifications.*')
                        ? 'bg-gray-900 text-white'
                        : 'text-gray-700 hover:bg-gray-100' }}"
                >
                    Certifications
                </a>

                <a
                    href="{{ route('admin.languages.index') }}"
                    class="flex items-center rounded-lg px-3 py-2 text-sm font-medium
                    {{ request()->routeIs('admin.languages.*')
                        ? 'bg-gray-900 text-white'
                        : 'text-gray-700 hover:bg-gray-100' }}"
                >
                    Languages
                </a>

            </div>

            <p class="mt-8 px-3 text-xs font-semibold uppercase tracking-wider text-gray-400">
                Content
            </p>

            <div class="mt-3 space-y-1">

                <a
                    href="{{ route('admin.blog.index') }}"
                    class="flex items-center rounded-lg px-3 py-2 text-sm font-medium
                    {{ request()->routeIs('admin.blog.*')
                        ? 'bg-gray-900 text-white'
                        : 'text-gray-700 hover:bg-gray-100' }}"
                >
                    Blog
                </a>

                <a
                    href="{{ route('admin.pages.index') }}"
                    class="flex items-center rounded-lg px-3 py-2 text-sm font-medium
                    {{ request()->routeIs('admin.pages.*')
                        ? 'bg-gray-900 text-white'
                        : 'text-gray-700 hover:bg-gray-100' }}"
                >
                    Pages
                </a>

                <a
                    href="{{ route('admin.navigation.index') }}"
                    class="flex items-center rounded-lg px-3 py-2 text-sm font-medium
                    {{ request()->routeIs('admin.navigation.*')
                        ? 'bg-gray-900 text-white'
                        : 'text-gray-700 hover:bg-gray-100' }}"
                >
                    Navigation
                </a>

                <a
                    href="{{ route('admin.sections.index') }}"
                    class="flex items-center rounded-lg px-3 py-2 text-sm font-medium
                    {{ request()->routeIs('admin.sections.*')
                        ? 'bg-gray-900 text-white'
                        : 'text-gray-700 hover:bg-gray-100' }}"
                >
                    Sections
                </a>

            </div>

            <p class="mt-8 px-3 text-xs font-semibold uppercase tracking-wider text-gray-400">
                System
            </p>

            <div class="mt-3 space-y-1">

                <a
                    href="{{ route('admin.media.index') }}"
                    class="flex items-center rounded-lg px-3 py-2 text-sm font-medium
                    {{ request()->routeIs('admin.media.*')
                        ? 'bg-gray-900 text-white'
                        : 'text-gray-700 hover:bg-gray-100' }}"
                >
                    Media
                </a>

                <a
                    href="{{ route('admin.resume.index') }}"
                    class="flex items-center rounded-lg px-3 py-2 text-sm font-medium
                    {{ request()->routeIs('admin.resume.*')
                        ? 'bg-gray-900 text-white'
                        : 'text-gray-700 hover:bg-gray-100' }}"
                >
                    Resume
                </a>

                <a
                    href="{{ route('admin.seo.index') }}"
                    class="flex items-center rounded-lg px-3 py-2 text-sm font-medium
                    {{ request()->routeIs('admin.seo.*')
                        ? 'bg-gray-900 text-white'
                        : 'text-gray-700 hover:bg-gray-100' }}"
                >
                    SEO
                </a>

                <a
                    href="{{ route('admin.theme.index') }}"
                    class="flex items-center rounded-lg px-3 py-2 text-sm font-medium
                    {{ request()->routeIs('admin.theme.*')
                        ? 'bg-gray-900 text-white'
                        : 'text-gray-700 hover:bg-gray-100' }}"
                >
                    Theme
                </a>

                <a
                    href="{{ route('admin.settings.index') }}"
                    class="flex items-center rounded-lg px-3 py-2 text-sm font-medium
                    {{ request()->routeIs('admin.settings.*')
                        ? 'bg-gray-900 text-white'
                        : 'text-gray-700 hover:bg-gray-100' }}"
                >
                    Settings
                </a>

            </div>

        </nav>

        {{-- Bottom --}}
        <div class="border-t border-gray-200 p-4">

            <a
                href="{{ route('home') }}"
                target="_blank"
                class="block rounded-lg px-3 py-2 text-sm font-medium text-gray-600 hover:bg-gray-100"
            >
                View Website
            </a>

        </div>

    </div>
</aside>
<nav
    id="mobile-navigation"
    class="hidden border-t border-gray-200 bg-white md:hidden"
    aria-label="Mobile navigation"
>

    <x-global.container>

        <div class="flex flex-col py-4">

            <x-global.link
                href="{{ route('home') }}"
                class="px-3 py-3 text-sm font-medium"
            >
                Home
            </x-global.link>

            <x-global.link
                href="{{ route('about') }}"
                class="px-3 py-3 text-sm font-medium"
            >
                About
            </x-global.link>

            <x-global.link
                href="{{ route('skills') }}"
                class="px-3 py-3 text-sm font-medium"
            >
                Skills
            </x-global.link>

            <x-global.link
                href="{{ route('experience') }}"
                class="px-3 py-3 text-sm font-medium"
            >
                Experience
            </x-global.link>

            <x-global.link
                href="{{ route('projects') }}"
                class="px-3 py-3 text-sm font-medium"
            >
                Projects
            </x-global.link>

            <x-global.link
                href="{{ route('services') }}"
                class="px-3 py-3 text-sm font-medium"
            >
                Services
            </x-global.link>

            <x-global.button
                href="{{ route('contact') }}"
                class="mt-2"
            >
                Contact
            </x-global.button>

        </div>

    </x-global.container>

</nav>
<header class="sticky top-0 z-50 border-b border-gray-200 backdrop-blur" style="background-color: {{ data_get($personData ?? [], 'theme.background_color', '#ffffff') }}; opacity: 0.96;">

    <x-global.container>

        <div class="flex items-center justify-between py-4">

            <a
                href="{{ route('home') }}"
                class="text-xl font-bold tracking-tight"
                style="color: {{ data_get($personData ?? [], 'theme.text_color', '#111827') }};"
            >
                {{ $personData['personal']['fullName'] ?? 'Your Name' }}
            </a>

            <div class="hidden md:block">
                <x-global.navigation />
            </div>

            <div class="md:hidden">
                <x-global.icon-button
                    type="button"
                    aria-label="Open navigation menu"
                    aria-controls="mobile-navigation"
                    aria-expanded="false"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-5 w-5"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="2"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M4 6h16M4 12h16M4 18h16"
                        />
                    </svg>
                </x-global.icon-button>
            </div>

        </div>

    </x-global.container>

    <x-global.mobile-navigation />

</header>
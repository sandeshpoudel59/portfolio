<footer class="border-t border-gray-200 bg-gray-950 text-white">

    <x-global.container>

        <div class="grid gap-10 py-12 sm:grid-cols-2 lg:grid-cols-5">

            {{-- =========================================================
                 Column 1: Name
            ========================================================== --}}
            <div>
                <a
                    href="{{ route('home') }}"
                    class="text-xl font-bold tracking-tight transition hover:text-gray-300"
                >
                    {{ $personData['personal']['fullName'] ?? 'Your Name' }}
                </a>

                <p class="mt-2 text-sm leading-6 text-gray-400">
                    {{ $personData['personal']['professionalTitle'] ?? 'Software Engineer' }}
                </p>
            </div>


            {{-- =========================================================
                 Column 2: Top Projects
            ========================================================== --}}
            <div>
                <h3 class="text-sm font-semibold uppercase tracking-wider text-white">
                    Top Projects
                </h3>

                <div class="mt-4 space-y-3">

                    @forelse (array_slice($personData['projects'] ?? [], 0, 5) as $project)

                        @if (!empty($project['name']))

                            @if (!empty($project['liveUrl']))
                                <a
                                    href="{{ $project['liveUrl'] }}"
                                    target="_blank"
                                    rel="noopener noreferrer"
                                    class="block text-sm text-gray-400 transition hover:text-white"
                                >
                                    {{ $project['name'] }}
                                </a>
                            @else
                                <a
                                    href="{{ route('projects') }}"
                                    class="block text-sm text-gray-400 transition hover:text-white"
                                >
                                    {{ $project['name'] }}
                                </a>
                            @endif

                        @endif

                    @empty

                        <a
                            href="{{ route('projects') }}"
                            class="text-sm text-gray-400 transition hover:text-white"
                        >
                            View Projects
                        </a>

                    @endforelse

                </div>
            </div>


            {{-- =========================================================
                 Column 3: Services
            ========================================================== --}}
            <div>
                <h3 class="text-sm font-semibold uppercase tracking-wider text-white">
                    Services
                </h3>

                <div class="mt-4 space-y-3">

                    @forelse (array_slice($personData['services'] ?? [], 0, 5) as $service)

                        @if (!empty($service['name']))
                            <a
                                href="{{ route('services') }}"
                                class="block text-sm text-gray-400 transition hover:text-white"
                            >
                                {{ $service['name'] }}
                            </a>
                        @endif

                    @empty

                        <a
                            href="{{ route('services') }}"
                            class="text-sm text-gray-400 transition hover:text-white"
                        >
                            View Services
                        </a>

                    @endforelse

                </div>
            </div>


            {{-- =========================================================
                 Column 4: Navigate
            ========================================================== --}}
            <div>
                <h3 class="text-sm font-semibold uppercase tracking-wider text-white">
                    Navigate
                </h3>

                <nav class="mt-4 space-y-3">

                    <a
                        href="{{ route('education') }}"
                        class="block text-sm text-gray-400 transition hover:text-white"
                    >
                        Education
                    </a>

                    <a
                        href="{{ route('skills') }}"
                        class="block text-sm text-gray-400 transition hover:text-white"
                    >
                        Skills
                    </a>

                    <a
                        href="{{ route('experience') }}"
                        class="block text-sm text-gray-400 transition hover:text-white"
                    >
                        Experience
                    </a>

                    <a
                        href="{{ route('achievements') }}"
                        class="block text-sm text-gray-400 transition hover:text-white"
                    >
                        Achievements
                    </a>

                    <a
                        href="{{ route('resume') }}"
                        class="block text-sm text-gray-400 transition hover:text-white"
                    >
                        Resume
                    </a>

                </nav>
            </div>


            {{-- =========================================================
                 Column 5: Connect
            ========================================================== --}}
            <div>
                <h3 class="text-sm font-semibold uppercase tracking-wider text-white">
                    Connect
                </h3>

                <div class="mt-4">

                    @php
                        $socialLinks = $personData['socialLinks'] ?? [];
                    @endphp

                    <div class="space-y-3">

                        @foreach ($socialLinks as $platform => $url)

                            @if ($platform !== 'other' && !empty($url))

                                <a
                                    href="{{ $url }}"
                                    target="_blank"
                                    rel="noopener noreferrer"
                                    class="block text-sm capitalize text-gray-400 transition hover:text-white"
                                >
                                    {{ $platform }}
                                </a>

                            @endif

                        @endforeach

                        @if (!empty($socialLinks['other']) && is_array($socialLinks['other']))

                            @foreach ($socialLinks['other'] as $url)

                                @if (!empty($url))

                                    <a
                                        href="{{ $url }}"
                                        target="_blank"
                                        rel="noopener noreferrer"
                                        class="block text-sm text-gray-400 transition hover:text-white"
                                    >
                                        Other
                                    </a>

                                @endif

                            @endforeach

                        @endif

                    </div>

                </div>
            </div>

        </div>


{{-- =============================================================
     Copyright & Bottom Navigation
============================================================== --}}
<div class="flex flex-col gap-4 border-t border-gray-800 py-6 md:flex-row md:items-center md:justify-between">

    {{-- Copyright --}}
    <p class="text-center text-sm text-gray-500 md:text-left">
        &copy; {{ date('Y') }}
        {{ $personData['personal']['fullName'] ?? 'Your Name' }}.
        All rights reserved.
    </p>


    {{-- Bottom Navigation --}}
    <nav class="flex items-center justify-center gap-6 md:justify-end">

        <a
            href="{{ route('about') }}"
            class="text-sm text-gray-500 transition hover:text-white"
        >
            About
        </a>

        <a
            href="{{ route('contact') }}"
            class="text-sm text-gray-500 transition hover:text-white"
        >
            Contact
        </a>

    </nav>

</div>

    </x-global.container>

</footer>
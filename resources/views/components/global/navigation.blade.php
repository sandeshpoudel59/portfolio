<nav
    {{ $attributes->merge([
        'class' => 'flex items-center gap-8'
    ]) }}
    aria-label="Primary navigation"
>

    <x-global.link
        href="{{ route('home') }}"
        class="text-sm font-medium"
    >
        Home
    </x-global.link>

    <x-global.link
        href="{{ route('about') }}"
        class="text-sm font-medium"
    >
        About
    </x-global.link>

    <x-global.link
        href="{{ route('skills') }}"
        class="text-sm font-medium"
    >
        Skills
    </x-global.link>

    <x-global.link
        href="{{ route('experience') }}"
        class="text-sm font-medium"
    >
        Experience
    </x-global.link>

    <x-global.link
        href="{{ route('projects') }}"
        class="text-sm font-medium"
    >
        Projects
    </x-global.link>

    <x-global.link
        href="{{ route('services') }}"
        class="text-sm font-medium"
    >
        Services
    </x-global.link>

    <x-global.button
        href="{{ route('contact') }}"
        size="sm"
    >
        Contact
    </x-global.button>

</nav>
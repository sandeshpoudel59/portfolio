@props([
    'url',
    'title',
])

<div class="flex flex-wrap gap-3">

    <x-global.link
        href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode($url) }}"
        external
        class="text-sm font-medium"
    >
        LinkedIn
    </x-global.link>

    <x-global.link
        href="https://twitter.com/intent/tweet?url={{ urlencode($url) }}&text={{ urlencode($title) }}"
        external
        class="text-sm font-medium"
    >
        X
    </x-global.link>

</div>
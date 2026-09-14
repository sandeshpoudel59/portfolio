@props([
    'post' => [],
])

<article class="overflow-hidden rounded-2xl border border-gray-200 bg-white shadow-sm transition hover:-translate-y-1 hover:shadow-lg">

    @if(!empty($post['image']))
        <x-blog.blog-image
            :src="$post['image']"
            :alt="$post['title'] ?? 'Blog image'"
        />
    @endif

    <div class="p-6">

        <x-blog.blog-meta
            :date="$post['date'] ?? null"
            :reading-time="$post['readingTime'] ?? null"
        />

        <h3 class="mt-3 text-xl font-semibold text-gray-900">
            {{ $post['title'] ?? '' }}
        </h3>

        @if(!empty($post['excerpt']))
            <p class="mt-3 leading-7 text-gray-600">
                {{ $post['excerpt'] }}
            </p>
        @endif

        <div class="mt-5">
            <x-global.link
                href="{{ $post['url'] ?? '#' }}"
                class="text-sm font-semibold"
            >
                Read More →
            </x-global.link>
        </div>

    </div>

</article>
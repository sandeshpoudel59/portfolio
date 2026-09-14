@props([
    'posts' => [],
])

<x-global.section
    id="blog"
    background="gray"
>

    <x-global.section-header
        eyebrow="Writing"
        title="Blog"
        description="Articles, notes, and ideas."
    />

    <div class="mt-10">

        <x-blog.blog-grid
            :posts="$posts"
        />

    </div>

</x-global.section>
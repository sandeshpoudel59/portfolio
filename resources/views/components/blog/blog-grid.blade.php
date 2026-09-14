@props([
    'posts' => [],
])

@if(!empty($posts))

    <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">

        @foreach($posts as $post)

            <x-blog.blog-card
                :post="$post"
            />

        @endforeach

    </div>

@else

    <x-global.empty-state
        title="No blog posts yet"
        description="Blog posts will appear here when they are published."
    />

@endif
@props([
    'posts' => [],
])

@if(!empty($posts))

    <div>

        <h2 class="text-2xl font-bold text-gray-900">
            Related Posts
        </h2>

        <div class="mt-6 grid gap-6 md:grid-cols-2">

            @foreach($posts as $post)

                <x-blog.blog-card
                    :post="$post"
                />

            @endforeach

        </div>

    </div>

@endif
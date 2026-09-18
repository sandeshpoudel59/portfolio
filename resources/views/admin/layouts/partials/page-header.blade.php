@if($title)

    <div class="mb-6">

        <h2 class="text-2xl font-bold tracking-tight text-gray-900">
            {{ $title }}
        </h2>

        @if($description)

            <p class="mt-1 text-sm text-gray-500">
                {{ $description }}
            </p>

        @endif

    </div>

@endif
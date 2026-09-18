@props([
    'title',
    'description',
    'href' => '#',
])

<a href="{{ $href }}"
   class="block rounded-xl border border-gray-200 p-4 transition hover:border-gray-400 hover:bg-gray-50">
    <h3 class="font-semibold text-gray-900">{{ $title }}</h3>
    <p class="mt-1 text-sm leading-6 text-gray-600">{{ $description }}</p>
</a>

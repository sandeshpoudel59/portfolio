@props([
    'title' => 'Nothing here',
    'message' => null,
])

<div class="py-8 text-center">
    <h3 class="font-medium text-gray-900">{{ $title }}</h3>
    @if ($message)
        <p class="mt-1 text-sm text-gray-500">{{ $message }}</p>
    @endif
    {{ $slot }}
</div>

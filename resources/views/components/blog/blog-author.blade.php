@props([
    'name' => 'Author',
    'image' => null,
])

<div class="flex items-center gap-3">

    @if($image)

        <img
            src="{{ $image }}"
            alt="{{ $name }}"
            class="h-10 w-10 rounded-full object-cover"
        >

    @else

        <div class="flex h-10 w-10 items-center justify-center rounded-full bg-gray-100 text-sm font-semibold text-gray-600">
            {{ strtoupper(substr($name, 0, 1)) }}
        </div>

    @endif

    <span class="text-sm font-medium text-gray-700">
        {{ $name }}
    </span>

</div>
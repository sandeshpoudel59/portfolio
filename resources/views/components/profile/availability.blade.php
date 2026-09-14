@props([
    'availability' => [],
])

@if(!empty($availability['status']))

    <div class="inline-flex items-center rounded-full bg-green-50 px-3 py-1 text-sm font-medium text-green-700">

        <span class="mr-2 h-2 w-2 rounded-full bg-green-500"></span>

        {{ $availability['status'] }}

    </div>

@endif
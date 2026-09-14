@props([
    'language' => [],
])

<div class="rounded-xl border border-gray-200 bg-white p-5">

    <h3 class="font-semibold text-gray-900">
        {{ $language['name'] ?? '' }}
    </h3>

    @if(!empty($language['proficiency']))
        <p class="mt-2 text-sm text-gray-500">
            {{ $language['proficiency'] }}
        </p>
    @endif

</div>
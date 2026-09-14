@props([
    'service' => [],
])

<article class="rounded-2xl border border-gray-200 bg-white p-6 shadow-sm transition hover:-translate-y-1 hover:shadow-md">

    <x-services.service-details
        :service="$service"
    />

</article>
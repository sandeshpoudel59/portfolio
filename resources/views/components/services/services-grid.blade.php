@props([
    'services' => [],
])

<div class="grid gap-6 md:grid-cols-2">

    @foreach($services as $service)

        <x-services.service-card
            :service="$service"
        />

    @endforeach

</div>
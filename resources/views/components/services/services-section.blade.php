@props([
    'personData' => [],
])

@if(!empty($personData['services']))

    <x-global.section
        id="services"
        background="white"
    >

        <x-global.section-header
            eyebrow="What I Do"
            title="Services"
        />

        <div class="mt-10">

            <x-services.services-grid
                :services="$personData['services']"
            />

        </div>

    </x-global.section>

@endif
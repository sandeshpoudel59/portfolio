@props([
    'personData' => [],
])

@if(!empty($personData['certifications']))

    <x-global.section
        id="certifications"
        background="white"
    >

        <x-global.section-header
            eyebrow="Credentials"
            title="Certifications"
        />

        <div class="mt-10 grid gap-6 md:grid-cols-2 lg:grid-cols-3">

            @foreach($personData['certifications'] as $certification)

                <x-certifications.certification-card
                    :certification="$certification"
                />

            @endforeach

        </div>

    </x-global.section>

@endif
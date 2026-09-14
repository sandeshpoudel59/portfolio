@props([
    'personData' => [],
])

@if(!empty($personData['experience']))

    <x-global.section
        id="experience"
        background="white"
    >

        <x-global.section-header
            eyebrow="Career"
            title="Experience"
        />

        <div class="mt-10 space-y-6">

            @foreach($personData['experience'] as $experience)

                <x-experience.experience-item
                    :experience="$experience"
                />

            @endforeach

        </div>

    </x-global.section>

@endif
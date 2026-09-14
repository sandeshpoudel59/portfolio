@props([
    'personData' => [],
])

@if(!empty($personData['achievements']))

    <x-global.section
        id="achievements"
        background="gray"
    >

        <x-global.section-header
            eyebrow="Recognition"
            title="Achievements"
        />

        <div class="mt-10 grid gap-6 md:grid-cols-2">

            @foreach($personData['achievements'] as $achievement)

                <x-achievements.achievement-card
                    :achievement="$achievement"
                />

            @endforeach

        </div>

    </x-global.section>

@endif
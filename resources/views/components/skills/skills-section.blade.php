@props([
    'personData' => [],
])

@if(!empty($personData['skills']))

    <x-global.section
        id="skills"
        background="gray"
    >

        <x-global.section-header
            eyebrow="Expertise"
            title="Skills"
        />

        <div class="mt-10 grid gap-6 md:grid-cols-2">

            <x-skills.technical-skills
                :skills="$personData['skills']['technical'] ?? []"
            />

            <x-skills.soft-skills
                :skills="$personData['skills']['soft'] ?? []"
            />

            <x-skills.tools
                :skills="$personData['skills']['tools'] ?? []"
            />

            <x-skills.programming-languages
                :languages="$personData['skills']['languages'] ?? []"
            />

        </div>

    </x-global.section>

@endif
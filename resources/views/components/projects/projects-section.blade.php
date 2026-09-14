@props([
    'personData' => [],
])

@if(!empty($personData['projects']))

    <x-global.section
        id="projects"
        background="gray"
    >

        <x-global.section-header
            eyebrow="Work"
            title="Projects"
        />

        <div class="mt-10">

            <x-projects.project-grid
                :projects="$personData['projects']"
            />

        </div>

    </x-global.section>

@endif
@props([
    'personData' => [],
])

<x-global.section
    id="resume"
    background="white"
>

    <div class="flex flex-col gap-6 sm:flex-row sm:items-start sm:justify-between">

        <x-global.section-header
            eyebrow="Curriculum Vitae"
            title="Resume"
        />

        <x-resume.resume-download
            :resume="$personData['resume'] ?? []"
        />

    </div>

    <div class="mt-12 space-y-16">

        <x-resume.resume-summary
            :personData="$personData"
        />

        <x-resume.resume-experience
            :experience="$personData['experience'] ?? []"
        />

        <x-resume.resume-education
            :education="$personData['education'] ?? []"
        />

        <x-resume.resume-skills
            :skills="$personData['skills']['technical'] ?? []"
        />

    </div>

</x-global.section>
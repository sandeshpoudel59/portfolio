@props([
    'personData' => [],
])

<x-global.section
    id="about"
    background="white"
>
    <x-global.section-header
        eyebrow="About"
        title="About Me"
    />

    <div class="mt-10 grid gap-10 lg:grid-cols-2">

        <x-about.biography :personData="$personData" />

        <div class="space-y-8">
            <x-about.career-goal :personData="$personData" />
            <x-about.professional-interests :personData="$personData" />
        </div>

    </div>
</x-global.section>
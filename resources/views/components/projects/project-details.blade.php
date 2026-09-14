@props([
    'project' => [],
])

<div class="space-y-6">

    <x-projects.project-info
        :project="$project"
    />

    <x-projects.project-technologies
        :technologies="$project['technologies'] ?? []"
    />

    <x-projects.project-features
        :features="$project['features'] ?? []"
    />

    <x-projects.project-links
        :project="$project"
    />

</div>
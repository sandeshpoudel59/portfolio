@props([
    'project' => [],
])

<article class="overflow-hidden rounded-2xl border border-gray-200 bg-white shadow-sm transition hover:-translate-y-1 hover:shadow-lg">

    @if(!empty($project['image']))
        <x-projects.project-image
            :project="$project"
        />
    @endif

    <div class="p-6">

        <x-projects.project-details
            :project="$project"
        />

    </div>

</article>
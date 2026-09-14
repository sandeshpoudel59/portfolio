@props([
    'projects' => [],
])

<div class="grid gap-8 md:grid-cols-2">

    @foreach($projects as $project)

        <x-projects.project-card
            :project="$project"
        />

    @endforeach

</div>
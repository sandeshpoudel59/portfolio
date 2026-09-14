@props([
    'project' => [],
])

@if(!empty($project['image']))

    <img
        src="{{ $project['image'] }}"
        alt="{{ $project['name'] ?? 'Project image' }}"
        {{ $attributes->merge([
            'class' => 'h-56 w-full object-cover'
        ]) }}
    >

@endif
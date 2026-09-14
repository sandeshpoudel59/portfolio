@extends('layouts.app')

@section('title', 'Projects | ' . ($personData['personal']['fullName'] ?? 'Portfolio'))

@section('meta_description', 'Explore projects, applications, and software work by ' . ($personData['personal']['fullName'] ?? 'this developer') . '.')

@section('content')

<section class="bg-gray-50">
    <div class="mx-auto max-w-7xl px-6 py-20 lg:py-28">

        <div class="max-w-3xl">
            <p class="text-sm font-semibold uppercase tracking-widest text-gray-500">
                Selected Work
            </p>

            <h1 class="mt-3 text-4xl font-bold tracking-tight text-gray-950 sm:text-5xl">
                Projects
            </h1>

            <p class="mt-5 text-lg leading-8 text-gray-600">
                A selection of projects, experiments, and work I have built.
            </p>
        </div>

        @if(!empty($personData['projects']))

            <div class="mt-12 grid gap-8 md:grid-cols-2">

                @foreach($personData['projects'] as $project)

                    <article class="overflow-hidden rounded-2xl border border-gray-200 bg-white shadow-sm transition hover:-translate-y-1 hover:shadow-lg">

                        @if(!empty($project['image']))
                            <img
                                src="{{ $project['image'] }}"
                                alt="{{ $project['name'] ?? 'Project image' }}"
                                class="h-56 w-full object-cover"
                            >
                        @endif

                        <div class="p-6">

                            <h2 class="text-xl font-semibold text-gray-950">
                                {{ $project['name'] ?? '' }}
                            </h2>

                            @if(!empty($project['role']))
                                <p class="mt-2 text-sm font-medium text-gray-500">
                                    {{ $project['role'] }}
                                </p>
                            @endif

                            @if(!empty($project['description']))
                                <p class="mt-4 leading-7 text-gray-600">
                                    {{ $project['description'] }}
                                </p>
                            @endif

                            @if(!empty($project['technologies']))
                                <div class="mt-5 flex flex-wrap gap-2">

                                    @foreach($project['technologies'] as $technology)
                                        <span class="rounded-full bg-gray-100 px-3 py-1 text-xs font-medium text-gray-700">
                                            {{ $technology }}
                                        </span>
                                    @endforeach

                                </div>
                            @endif

                            @if(!empty($project['features']))
                                <div class="mt-6">

                                    <h3 class="text-sm font-semibold text-gray-900">
                                        Key Features
                                    </h3>

                                    <ul class="mt-3 list-disc space-y-2 pl-5 text-sm text-gray-600">

                                        @foreach($project['features'] as $feature)
                                            <li>
                                                {{ $feature }}
                                            </li>
                                        @endforeach

                                    </ul>

                                </div>
                            @endif

                            <div class="mt-6 flex flex-wrap gap-4">

                                @if(!empty($project['liveUrl']))
                                    <a
                                        href="{{ $project['liveUrl'] }}"
                                        target="_blank"
                                        rel="noopener noreferrer"
                                        class="rounded-lg bg-gray-950 px-4 py-2 text-sm font-semibold text-white transition hover:bg-gray-700"
                                    >
                                        Live Project
                                    </a>
                                @endif

                                @if(!empty($project['sourceCodeUrl']))
                                    <a
                                        href="{{ $project['sourceCodeUrl'] }}"
                                        target="_blank"
                                        rel="noopener noreferrer"
                                        class="rounded-lg border border-gray-300 px-4 py-2 text-sm font-semibold text-gray-900 transition hover:bg-gray-100"
                                    >
                                        Source Code
                                    </a>
                                @endif

                            </div>

                        </div>

                    </article>

                @endforeach

            </div>

        @else

            <div class="mt-12 rounded-2xl border border-gray-200 bg-white p-10 text-center">
                <p class="text-gray-500">
                    Projects will be added soon.
                </p>
            </div>

        @endif

    </div>
</section>

@endsection
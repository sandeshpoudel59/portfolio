@extends('layouts.app')

@section('title', 'Skills | ' . ($personData['personal']['fullName'] ?? 'Portfolio'))

@section('meta_description', 'Technical skills, professional skills, tools, and languages of ' . ($personData['personal']['fullName'] ?? 'this professional') . '.')

@section('content')

<section>
    <div class="mx-auto max-w-7xl px-6 py-20 lg:py-28">

        <div class="max-w-3xl">
            <p class="text-sm font-semibold uppercase tracking-widest text-gray-500">
                Expertise
            </p>

            <h1 class="mt-3 text-4xl font-bold tracking-tight text-gray-950 sm:text-5xl">
                Skills
            </h1>

            <p class="mt-5 text-lg leading-8 text-gray-600">
                Technologies, tools, professional skills, and languages.
            </p>
        </div>

        <div class="mt-12 grid gap-6 md:grid-cols-2">

            @foreach([
                'technical' => 'Technical Skills',
                'soft' => 'Soft Skills',
                'tools' => 'Tools',
                'languages' => 'Languages'
            ] as $key => $title)

                @if(!empty($personData['skills'][$key]))

                    <section class="rounded-2xl border border-gray-200 bg-white p-6 shadow-sm">

                        <h2 class="text-xl font-semibold text-gray-950">
                            {{ $title }}
                        </h2>

                        <div class="mt-5 flex flex-wrap gap-2">

                            @foreach($personData['skills'][$key] as $skill)

                                <span class="rounded-lg bg-gray-100 px-3 py-2 text-sm text-gray-700">
                                    {{ $skill }}
                                </span>

                            @endforeach

                        </div>

                    </section>

                @endif

            @endforeach

        </div>

    </div>
</section>

@endsection
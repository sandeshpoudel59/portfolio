@extends('layouts.app')

@section('title', 'Resume | ' . ($personData['personal']['fullName'] ?? 'Portfolio'))

@section('meta_description', 'Resume of ' . ($personData['personal']['fullName'] ?? 'this professional') . '.')

@section('content')

<section>
    <div class="mx-auto max-w-5xl px-6 py-20 lg:py-28">

        <div class="flex flex-col justify-between gap-6 md:flex-row md:items-end">

            <div>
                <p class="text-sm font-semibold uppercase tracking-widest text-gray-500">
                    Professional Profile
                </p>

                <h1 class="mt-3 text-4xl font-bold tracking-tight text-gray-950 sm:text-5xl">
                    Resume
                </h1>

                @if(!empty($personData['resume']['lastUpdated']))
                    <p class="mt-4 text-sm text-gray-500">
                        Last updated:
                        {{ $personData['resume']['lastUpdated'] }}
                    </p>
                @endif
            </div>

            @if(!empty($personData['resume']['url']))
                <a
                    href="{{ $personData['resume']['url'] }}"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="inline-flex rounded-lg bg-gray-950 px-5 py-3 text-sm font-semibold text-white transition hover:bg-gray-700"
                >
                    View / Download Resume
                </a>
            @endif

        </div>

        <div class="mt-12 space-y-12">

            {{-- Experience --}}
            @if(!empty($personData['experience']))
                <section>

                    <h2 class="text-2xl font-bold text-gray-950">
                        Experience
                    </h2>

                    <div class="mt-6 space-y-6">

                        @foreach($personData['experience'] as $experience)

                            <article class="border-l-2 border-gray-200 pl-6">

                                <h3 class="font-semibold text-gray-900">
                                    {{ $experience['jobTitle'] ?? '' }}
                                </h3>

                                <p class="mt-1 text-gray-600">
                                    {{ $experience['company'] ?? '' }}
                                </p>

                                <p class="mt-1 text-sm text-gray-500">
                                    {{ $experience['startDate'] ?? '' }}
                                    -
                                    {{ $experience['endDate'] ?? 'Present' }}
                                </p>

                            </article>

                        @endforeach

                    </div>

                </section>
            @endif


            {{-- Education --}}
            @if(!empty($personData['education']))
                <section>

                    <h2 class="text-2xl font-bold text-gray-950">
                        Education
                    </h2>

                    <div class="mt-6 space-y-6">

                        @foreach($personData['education'] as $education)

                            <article class="border-l-2 border-gray-200 pl-6">

                                <h3 class="font-semibold text-gray-900">
                                    {{ $education['degree'] ?? '' }}
                                </h3>

                                @if(!empty($education['fieldOfStudy']))
                                    <p class="mt-1 text-gray-600">
                                        {{ $education['fieldOfStudy'] }}
                                    </p>
                                @endif

                                <p class="mt-1 font-medium text-gray-700">
                                    {{ $education['institution'] ?? '' }}
                                </p>

                                <p class="mt-1 text-sm text-gray-500">
                                    {{ $education['startDate'] ?? '' }}
                                    -
                                    {{ $education['endDate'] ?? 'Present' }}
                                </p>

                            </article>

                        @endforeach

                    </div>

                </section>
            @endif


            {{-- Skills --}}
            @if(!empty($personData['skills']))
                <section>

                    <h2 class="text-2xl font-bold text-gray-950">
                        Skills
                    </h2>

                    <div class="mt-6 flex flex-wrap gap-2">

                        @foreach([
                            'technical',
                            'soft',
                            'tools',
                            'languages'
                        ] as $category)

                            @foreach($personData['skills'][$category] ?? [] as $skill)

                                <span class="rounded-full bg-gray-100 px-3 py-2 text-sm text-gray-700">
                                    {{ $skill }}
                                </span>

                            @endforeach

                        @endforeach

                    </div>

                </section>
            @endif

        </div>

    </div>
</section>

@endsection
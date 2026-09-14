@extends('layouts.app')

@section('title', 'Experience | ' . ($personData['personal']['fullName'] ?? 'Portfolio'))

@section('meta_description', 'Professional experience and career history of ' . ($personData['personal']['fullName'] ?? 'this professional') . '.')

@section('content')

<section>
    <div class="mx-auto max-w-5xl px-6 py-20 lg:py-28">

        <div class="max-w-3xl">
            <p class="text-sm font-semibold uppercase tracking-widest text-gray-500">
                Career
            </p>

            <h1 class="mt-3 text-4xl font-bold tracking-tight text-gray-950 sm:text-5xl">
                Experience
            </h1>
        </div>

        @if(!empty($personData['experience']))

            <div class="mt-12 space-y-8">

                @foreach($personData['experience'] as $experience)

                    <article class="relative rounded-2xl border border-gray-200 bg-white p-6 shadow-sm">

                        <div class="flex flex-col justify-between gap-3 md:flex-row">

                            <div>
                                <h2 class="text-xl font-semibold text-gray-950">
                                    {{ $experience['jobTitle'] ?? '' }}
                                </h2>

                                @if(!empty($experience['company']))
                                    <p class="mt-1 font-medium text-gray-600">
                                        {{ $experience['company'] }}
                                    </p>
                                @endif
                            </div>

                            @if(
                                !empty($experience['startDate']) ||
                                !empty($experience['endDate'])
                            )
                                <p class="text-sm text-gray-500">
                                    {{ $experience['startDate'] ?? '' }}
                                    @if(!empty($experience['startDate']) || !empty($experience['endDate']))
                                        -
                                    @endif
                                    {{ $experience['endDate'] ?? 'Present' }}
                                </p>
                            @endif

                        </div>

                        @if(!empty($experience['location']))
                            <p class="mt-3 text-sm text-gray-500">
                                {{ $experience['location'] }}
                            </p>
                        @endif

                        @if(!empty($experience['employmentType']))
                            <span class="mt-4 inline-flex rounded-full bg-gray-100 px-3 py-1 text-xs font-medium text-gray-700">
                                {{ $experience['employmentType'] }}
                            </span>
                        @endif

                        @if(!empty($experience['description']))
                            <p class="mt-5 leading-7 text-gray-600">
                                {{ $experience['description'] }}
                            </p>
                        @endif

                        @if(!empty($experience['achievements']))
                            <ul class="mt-5 list-disc space-y-2 pl-5 text-gray-600">

                                @foreach($experience['achievements'] as $achievement)
                                    <li>
                                        {{ $achievement }}
                                    </li>
                                @endforeach

                            </ul>
                        @endif

                    </article>

                @endforeach

            </div>

        @else

            <div class="mt-12 rounded-2xl border border-gray-200 bg-gray-50 p-10 text-center">
                <p class="text-gray-500">
                    No experience has been added yet.
                </p>
            </div>

        @endif

    </div>
</section>

@endsection

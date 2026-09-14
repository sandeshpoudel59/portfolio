@extends('layouts.app')

@section('title', 'About | ' . ($personData['personal']['fullName'] ?? 'Portfolio'))

@section('meta_description')
    {{ $personData['about']['bio'] ?? 'Learn more about me, my background, interests, and career goals.' }}
@endsection

@section('og_title')
    About | {{ $personData['personal']['fullName'] ?? 'Portfolio' }}
@endsection

@section('og_description')
    {{ $personData['about']['bio'] ?? 'Learn more about me, my background, interests, and career goals.' }}
@endsection

@section('content')

<section class="border-b border-gray-100">
    <div class="mx-auto max-w-5xl px-6 py-20 lg:py-28">

        <div class="max-w-3xl">
            <p class="text-sm font-semibold uppercase tracking-widest text-gray-500">
                About Me
            </p>

            <h1 class="mt-3 text-4xl font-bold tracking-tight text-gray-950 sm:text-5xl">
                {{ $personData['personal']['fullName'] ?? 'About Me' }}
            </h1>

            @if(!empty($personData['personal']['professionalTitle']))
                <p class="mt-4 text-xl text-gray-600">
                    {{ $personData['personal']['professionalTitle'] }}
                </p>
            @endif
        </div>

        <div class="mt-12 space-y-12">

            @if(!empty($personData['about']['bio']))
                <div>
                    <h2 class="text-2xl font-bold text-gray-950">
                        Who I Am
                    </h2>

                    <p class="mt-5 text-lg leading-8 text-gray-600">
                        {{ $personData['about']['bio'] }}
                    </p>
                </div>
            @endif

            @if(!empty($personData['about']['careerGoal']))
                <div>
                    <h2 class="text-2xl font-bold text-gray-950">
                        Career Goal
                    </h2>

                    <p class="mt-5 text-lg leading-8 text-gray-600">
                        {{ $personData['about']['careerGoal'] }}
                    </p>
                </div>
            @endif

            @if(!empty($personData['about']['professionalInterests']))
                <div>
                    <h2 class="text-2xl font-bold text-gray-950">
                        Professional Interests
                    </h2>

                    <div class="mt-5 flex flex-wrap gap-3">
                        @foreach($personData['about']['professionalInterests'] as $interest)
                            <span class="rounded-full bg-gray-100 px-4 py-2 text-sm text-gray-700">
                                {{ $interest }}
                            </span>
                        @endforeach
                    </div>
                </div>
            @endif

        </div>

    </div>
</section>

@endsection
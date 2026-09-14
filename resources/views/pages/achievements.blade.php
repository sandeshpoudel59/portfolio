@extends('layouts.app')

@section('title', 'Achievements | ' . ($personData['personal']['fullName'] ?? 'Portfolio'))

@section('meta_description', 'Achievements and accomplishments of ' . ($personData['personal']['fullName'] ?? 'this professional') . '.')

@section('content')

<section class="bg-gray-50">
    <div class="mx-auto max-w-7xl px-6 py-20 lg:py-28">

        <div class="max-w-3xl">
            <p class="text-sm font-semibold uppercase tracking-widest text-gray-500">
                Recognition
            </p>

            <h1 class="mt-3 text-4xl font-bold tracking-tight text-gray-950 sm:text-5xl">
                Achievements
            </h1>
        </div>

        @if(!empty($personData['achievements']))
            <div class="mt-12 grid gap-6 md:grid-cols-2">

                @foreach($personData['achievements'] as $achievement)
                    <article class="rounded-2xl border border-gray-200 bg-white p-6 shadow-sm">

                        <h2 class="text-xl font-semibold text-gray-950">
                            {{ $achievement['title'] ?? '' }}
                        </h2>

                        @if(!empty($achievement['organization']))
                            <p class="mt-2 font-medium text-gray-600">
                                {{ $achievement['organization'] }}
                            </p>
                        @endif

                        @if(!empty($achievement['date']))
                            <p class="mt-1 text-sm text-gray-500">
                                {{ $achievement['date'] }}
                            </p>
                        @endif

                        @if(!empty($achievement['description']))
                            <p class="mt-4 leading-7 text-gray-600">
                                {{ $achievement['description'] }}
                            </p>
                        @endif

                    </article>
                @endforeach

            </div>
        @else
            <div class="mt-12 rounded-2xl border border-gray-200 bg-white p-10 text-center">
                <p class="text-gray-500">
                    Achievements will be added soon.
                </p>
            </div>
        @endif

    </div>
</section>

@endsection
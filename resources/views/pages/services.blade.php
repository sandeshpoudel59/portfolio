@extends('layouts.app')

@section('title', 'Services | ' . ($personData['personal']['fullName'] ?? 'Portfolio'))

@section('meta_description', 'Professional services offered by ' . ($personData['personal']['fullName'] ?? 'this professional') . '.')

@section('content')

<section class="bg-gray-50">
    <div class="mx-auto max-w-7xl px-6 py-20 lg:py-28">

        <div class="max-w-3xl">
            <p class="text-sm font-semibold uppercase tracking-widest text-gray-500">
                What I Do
            </p>

            <h1 class="mt-3 text-4xl font-bold tracking-tight text-gray-950 sm:text-5xl">
                Services
            </h1>

            <p class="mt-5 text-lg leading-8 text-gray-600">
                Professional services and solutions I can provide.
            </p>
        </div>

        @if(!empty($personData['services']))

            <div class="mt-12 grid gap-6 md:grid-cols-2 lg:grid-cols-3">

                @foreach($personData['services'] as $service)

                    <article class="rounded-2xl border border-gray-200 bg-white p-6 shadow-sm transition hover:-translate-y-1 hover:shadow-md">

                        <h2 class="text-xl font-semibold text-gray-950">
                            {{ $service['name'] ?? '' }}
                        </h2>

                        @if(!empty($service['description']))
                            <p class="mt-4 leading-7 text-gray-600">
                                {{ $service['description'] }}
                            </p>
                        @endif

                    </article>

                @endforeach

            </div>

        @else

            <div class="mt-12 rounded-2xl border border-gray-200 bg-white p-10 text-center">
                <p class="text-gray-500">
                    Services will be added soon.
                </p>
            </div>

        @endif

    </div>
</section>

@endsection
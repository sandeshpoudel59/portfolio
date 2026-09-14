@extends('layouts.app')

@section('content')

    {{-- Page Header --}}
    <section class="border-b border-gray-200 bg-gray-50">
        <x-global.container>
            <div class="py-16 md:py-20">

                <p class="text-sm font-semibold uppercase tracking-wider text-indigo-600">
                    Education
                </p>

                <h1 class="mt-3 text-4xl font-bold tracking-tight text-gray-900 md:text-5xl">
                    My Education
                </h1>

                <p class="mt-5 max-w-2xl text-lg leading-8 text-gray-600">
                    My academic background, institutions, achievements, and educational journey.
                </p>

            </div>
        </x-global.container>
    </section>


    {{-- Education Content --}}
    <section class="py-16 md:py-20">
        <x-global.container>

            @if (!empty($personData['education']))

                <x-education.education-timeline
                    :education="$personData['education']"
                />

            @else

                <x-global.empty-state
                    title="Education information unavailable"
                    message="Education details have not been added yet."
                />

            @endif

        </x-global.container>
    </section>

@endsection
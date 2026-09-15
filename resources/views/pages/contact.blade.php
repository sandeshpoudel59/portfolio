@extends('layouts.app')

@section('title', 'Contact | ' . ($personData['personal']['fullName'] ?? 'Portfolio'))

@section('meta_description', 'Get in touch with ' . ($personData['personal']['fullName'] ?? 'me') . ' for projects, opportunities, and professional collaboration.')

@section('content')

<section class="bg-gray-950 text-white">
    <div class="mx-auto max-w-5xl px-6 py-20 lg:py-28">

        <div class="max-w-3xl">
            <p class="text-sm font-semibold uppercase tracking-widest text-gray-400">
                Get In Touch
            </p>

            <h1 class="mt-3 text-4xl font-bold tracking-tight sm:text-5xl">
                Let's Work Together
            </h1>

            @if(!empty($personData['availability']['message']))
                <p class="mt-6 text-lg leading-8 text-gray-400">
                    {{ $personData['availability']['message'] }}
                </p>
            @endif
        </div>

        <div class="mt-12 grid gap-6 md:grid-cols-2">

            @if(!empty($personData['contact']['professionalEmail']))
                <a
                    href="mailto:{{ $personData['contact']['professionalEmail'] }}"
                    class="rounded-2xl border border-gray-800 bg-gray-900 p-6 transition hover:border-gray-600"
                >
                    <p class="text-sm text-gray-500">
                        Email
                    </p>

                    <p class="mt-2 font-medium">
                        {{ $personData['contact']['professionalEmail'] }}
                    </p>
                </a>
            @endif

            @if(!empty($personData['contact']['phone']))
                <a
                    href="tel:{{ $personData['contact']['phone'] }}"
                    class="rounded-2xl border border-gray-800 bg-gray-900 p-6 transition hover:border-gray-600"
                >
                    <p class="text-sm text-gray-500">
                        Phone
                    </p>

                    <p class="mt-2 font-medium">
                        {{ $personData['contact']['phone'] }}
                    </p>
                </a>
            @endif

            @if(!empty($personData['contact']['website']))
                <a
                    href="{{ $personData['contact']['website'] }}"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="rounded-2xl border border-gray-800 bg-gray-900 p-6 transition hover:border-gray-600"
                >
                    <p class="text-sm text-gray-500">
                        Website
                    </p>

                    <p class="mt-2 font-medium">
                        {{ $personData['contact']['website'] }}
                    </p>
                </a>
            @endif

            @if(
                !empty($personData['personal']['location']['city']) ||
                !empty($personData['personal']['location']['country'])
            )
                <div class="rounded-2xl border border-gray-800 bg-gray-900 p-6">

                    <p class="text-sm text-gray-500">
                        Location
                    </p>

                    <p class="mt-2 font-medium">
                        {{ $personData['personal']['location']['city'] ?? '' }}
                        @if(
                            !empty($personData['personal']['location']['city']) &&
                            !empty($personData['personal']['location']['country'])
                        )
                            ,
                        @endif
                        {{ $personData['personal']['location']['country'] ?? '' }}
                    </p>

                </div>
            @endif

        </div>

        <div class="mt-12">
        <h2 class="text-lg font-semibold">
                    Contact Form
                </h2>
        <x-contact.contact-form />
</div>

        @if(!empty($personData['socialLinks']))
            <div class="mt-12">

                <h2 class="text-lg font-semibold">
                    Find Me Online
                </h2>

                <div class="mt-5 flex flex-wrap gap-4">

                    @foreach([
                        'linkedin' => 'LinkedIn',
                        'github' => 'GitHub',
                        'twitter' => 'Twitter / X',
                        'instagram' => 'Instagram'
                    ] as $key => $label)

                        @if(!empty($personData['socialLinks'][$key]))
                            <a
                                href="{{ $personData['socialLinks'][$key] }}"
                                target="_blank"
                                rel="noopener noreferrer"
                                class="rounded-lg border border-gray-700 px-4 py-2 text-sm text-gray-300 transition hover:border-gray-400 hover:text-white"
                            >
                                {{ $label }}
                            </a>
                        @endif

                    @endforeach

                </div>

            </div>
        @endif

    </div>
</section>

@endsection
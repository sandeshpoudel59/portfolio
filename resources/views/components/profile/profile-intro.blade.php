@props([
    'personData' => [],
])

<div>

    <p class="text-sm font-semibold uppercase tracking-widest text-gray-500">
        Hello, I'm
    </p>

    <h1 class="mt-3 text-5xl font-bold tracking-tight text-gray-950 sm:text-6xl">
        {{ $personData['personal']['fullName'] ?? 'Your Name' }}
    </h1>

    <div class="mt-4">
        <x-profile.professional-title
            :title="$personData['personal']['professionalTitle'] ?? 'Software Engineer'"
        />
    </div>

    @if(!empty($personData['personal']['shortBio']))

        <p class="mt-6 max-w-2xl text-lg leading-8 text-gray-600">
            {{ $personData['personal']['shortBio'] }}
        </p>

    @endif

</div>
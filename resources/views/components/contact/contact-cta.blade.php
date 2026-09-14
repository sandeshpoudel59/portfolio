@props([
    'personData' => [],
])

<div class="rounded-2xl bg-gray-950 px-6 py-10 text-white sm:px-10">

    <p class="text-sm font-semibold uppercase tracking-widest text-gray-400">
        Get In Touch
    </p>

    <h2 class="mt-3 text-3xl font-bold">
        Let's Work Together
    </h2>

    <p class="mt-4 max-w-2xl leading-7 text-gray-400">
        {{ $personData['availability']['message'] ?? 'Have a project, idea, or opportunity? Feel free to get in touch.' }}
    </p>

    @if(!empty($personData['contact']['professionalEmail']))

        <div class="mt-6">

            <x-global.button
                href="mailto:{{ $personData['contact']['professionalEmail'] }}"
                variant="white"
            >
                {{ $personData['contact']['professionalEmail'] }}
            </x-global.button>

        </div>

    @endif

</div>
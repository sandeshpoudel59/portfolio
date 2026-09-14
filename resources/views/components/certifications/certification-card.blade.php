@props([
    'certification' => [],
])

<article class="rounded-2xl border border-gray-200 bg-white p-6 shadow-sm">

    <h3 class="text-lg font-semibold text-gray-900">
        {{ $certification['name'] ?? '' }}
    </h3>

    @if(!empty($certification['issuingOrganization']))
        <p class="mt-2 text-sm font-medium text-gray-600">
            {{ $certification['issuingOrganization'] }}
        </p>
    @endif

    @if(!empty($certification['issueDate']))
        <p class="mt-2 text-sm text-gray-500">
            Issued {{ $certification['issueDate'] }}
        </p>
    @endif

    @if(!empty($certification['credentialId']))
        <p class="mt-2 text-sm text-gray-500">
            Credential ID:
            {{ $certification['credentialId'] }}
        </p>
    @endif

    @if(!empty($certification['credentialUrl']))
        <div class="mt-5">
            <x-global.link
                href="{{ $certification['credentialUrl'] }}"
                external
                variant="underline"
                class="text-sm font-semibold"
            >
                View Credential →
            </x-global.link>
        </div>
    @endif

</article>
@props([
    'certification' => [],
])

<div class="space-y-4">

    <div>
        <span class="text-sm text-gray-500">
            Certification
        </span>

        <p class="mt-1 font-medium text-gray-900">
            {{ $certification['name'] ?? '' }}
        </p>
    </div>

    @if(!empty($certification['issuingOrganization']))
        <div>
            <span class="text-sm text-gray-500">
                Issuing Organization
            </span>

            <p class="mt-1 text-gray-900">
                {{ $certification['issuingOrganization'] }}
            </p>
        </div>
    @endif

</div>
@props([
    'personData' => [],
])

<div>

    <h3 class="text-xl font-semibold text-gray-900">
        Contact Information
    </h3>

    <dl class="mt-6 space-y-6">

        <x-contact.contact-field
            label="Email"
            :value="$personData['contact']['professionalEmail'] ?? null"
            :href="!empty($personData['contact']['professionalEmail'])
                ? 'mailto:' . $personData['contact']['professionalEmail']
                : null"
        />

        <x-contact.contact-field
            label="Phone"
            :value="$personData['contact']['phone'] ?? null"
            :href="!empty($personData['contact']['phone'])
                ? 'tel:' . $personData['contact']['phone']
                : null"
        />

        <x-contact.contact-field
            label="Website"
            :value="$personData['contact']['website'] ?? null"
            :href="$personData['contact']['website'] ?? null"
        />

    </dl>

    @if(!empty($personData['socialLinks']))

        <div class="mt-8">

            <h4 class="text-sm font-semibold text-gray-900">
                Social Profiles
            </h4>

            <div class="mt-4">
                <x-global.social-links
                    :links="$personData['socialLinks']"
                />
            </div>

        </div>

    @endif

</div>
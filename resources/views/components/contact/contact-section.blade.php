@props([
    'personData' => [],
])

<x-global.section
    id="contact"
    background="white"
>

    <x-global.section-header
        eyebrow="Contact"
        title="Get In Touch"
    />

    <div class="mt-12 grid gap-12 lg:grid-cols-2">

        <x-contact.contact-information
            :personData="$personData"
        />

        <x-contact.contact-form />

    </div>

</x-global.section>
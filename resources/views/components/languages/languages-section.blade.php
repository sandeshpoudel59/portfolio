@props([
    'personData' => [],
])

@if(!empty($personData['languages']))

    <x-global.section
        id="languages"
        background="gray"
    >

        <x-global.section-header
            eyebrow="Communication"
            title="Languages"
        />

        <div class="mt-10 grid gap-4 sm:grid-cols-2 lg:grid-cols-4">

            @foreach($personData['languages'] as $language)

                <x-languages.language-card
                    :language="$language"
                />

            @endforeach

        </div>

    </x-global.section>

@endif
@props([
    'personData' => [],
])

@if(!empty($personData['education']))

    <x-global.section
        id="education"
        background="gray"
    >

        <x-global.section-header
            eyebrow="Academic Background"
            title="Education"
        />

        <div class="mt-10 space-y-6">

            @foreach($personData['education'] as $education)

                <x-education.education-item
                    :education="$education"
                />

            @endforeach

        </div>

    </x-global.section>

@endif
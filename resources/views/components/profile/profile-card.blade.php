@props([
    'personData' => [],
])

<div class="rounded-2xl border border-gray-200 bg-white p-6 shadow-sm">

    <div class="flex flex-col items-center text-center">

        <x-profile.profile-photo
            :src="$personData['personal']['profilePhoto'] ?? null"
            :name="$personData['personal']['fullName'] ?? 'Profile photo'"
        />

        <h2 class="mt-6 text-2xl font-bold text-gray-900">
            {{ $personData['personal']['fullName'] ?? 'Your Name' }}
        </h2>

        <p class="mt-2 text-gray-600">
            {{ $personData['personal']['professionalTitle'] ?? '' }}
        </p>

        <div class="mt-4">
            <x-profile.location
                :location="$personData['personal']['location'] ?? []"
            />
        </div>

    </div>

</div>
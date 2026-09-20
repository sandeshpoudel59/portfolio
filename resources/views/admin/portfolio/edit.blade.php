@extends('layouts.admin')

@section('title', 'Portfolio')

@section('content')
    <x-admin.layout.page-header
        title="Portfolio"
        description="Edit the information displayed on your public portfolio."
    />

    <form method="POST" action="{{ route('admin.portfolio.update') }}" class="space-y-6">
        @csrf
        @method('PUT')

        <x-admin.ui.card title="Personal Information">
            <div class="grid gap-5 md:grid-cols-2">
                <x-admin.ui.input
                    name="personal[fullName]"
                    label="Full name"
                    :value="old('personal.fullName', data_get($personData, 'personal.fullName'))"
                />

                <x-admin.ui.input
                    name="personal[professionalTitle]"
                    label="Professional title"
                    :value="old('personal.professionalTitle', data_get($personData, 'personal.professionalTitle'))"
                />

                <div class="md:col-span-2">
                    <x-admin.ui.textarea
                        name="personal[shortBio]"
                        label="Short bio"
                        rows="4"
                    >{{ old('personal.shortBio', data_get($personData, 'personal.shortBio')) }}</x-admin.ui.textarea>
                </div>

                <x-admin.ui.input
                    name="personal[location][city]"
                    label="City"
                    :value="old('personal.location.city', data_get($personData, 'personal.location.city'))"
                />

                <x-admin.ui.input
                    name="personal[location][country]"
                    label="Country"
                    :value="old('personal.location.country', data_get($personData, 'personal.location.country'))"
                />
            </div>
        </x-admin.ui.card>

        <x-admin.ui.card title="Contact">
            <div class="grid gap-5 md:grid-cols-3">
                <x-admin.ui.input
                    type="email"
                    name="contact[professionalEmail]"
                    label="Professional email"
                    :value="old('contact.professionalEmail', data_get($personData, 'contact.professionalEmail'))"
                />

                <x-admin.ui.input
                    name="contact[phone]"
                    label="Phone"
                    :value="old('contact.phone', data_get($personData, 'contact.phone'))"
                />

                <x-admin.ui.input
                    type="url"
                    name="contact[website]"
                    label="Website"
                    :value="old('contact.website', data_get($personData, 'contact.website'))"
                />
            </div>
        </x-admin.ui.card>

        <x-admin.ui.card title="Social Links">
            <div class="grid gap-5 md:grid-cols-2">
                @foreach (['linkedin', 'github', 'twitter', 'instagram'] as $platform)
                    <x-admin.ui.input
                        type="url"
                        name="socialLinks[{{ $platform }}]"
                        :label="ucfirst($platform)"
                        :value="old('socialLinks.' . $platform, data_get($personData, 'socialLinks.' . $platform))"
                    />
                @endforeach
            </div>
        </x-admin.ui.card>

        <x-admin.ui.card title="About">
            <div class="space-y-5">
                <x-admin.ui.textarea
                    name="about[bio]"
                    label="Biography"
                    rows="7"
                >{{ old('about.bio', data_get($personData, 'about.bio')) }}</x-admin.ui.textarea>

                <x-admin.ui.textarea
                    name="about[careerGoal]"
                    label="Career goal"
                    rows="5"
                >{{ old('about.careerGoal', data_get($personData, 'about.careerGoal')) }}</x-admin.ui.textarea>
            </div>
        </x-admin.ui.card>

        <x-admin.ui.card title="Availability">
            <div class="grid gap-5 md:grid-cols-2">
                <x-admin.ui.input
                    name="availability[status]"
                    label="Status"
                    :value="old('availability.status', data_get($personData, 'availability.status'))"
                />

                <x-admin.ui.input
                    name="availability[message]"
                    label="Message"
                    :value="old('availability.message', data_get($personData, 'availability.message'))"
                />
            </div>
        </x-admin.ui.card>

        <div class="flex justify-end">
            <x-admin.ui.button type="submit">
                Save Changes
            </x-admin.ui.button>
        </div>
    </form>
@endsection

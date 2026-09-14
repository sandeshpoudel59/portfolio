@extends('layouts.app')
@props(['personData'])


{{-- Page SEO --}}
@section('title')
    {{ $personData['personal']['fullName'] ?? 'Portfolio' }}
@endsection

@section('meta_description')
    {{ $personData['personal']['shortBio'] ?? 'Personal portfolio website' }}
@endsection

@section('meta_author')
    {{ $personData['personal']['fullName'] ?? 'Your Name' }}
@endsection

@section('og_title')
    {{ $personData['personal']['fullName'] ?? 'Portfolio' }}
@endsection

@section('og_description')
    {{ $personData['personal']['shortBio'] ?? 'Personal portfolio website' }}
@endsection

@section('og_image')
    {{ !empty($personData['personal']['profilePhoto'])
        ? $personData['personal']['profilePhoto']
        : asset('images/og-default.jpg') }}
@endsection

@section('og_url')
    {{ url('/') }}
@endsection

@section('og_type')
    website
@endsection

@section('og_site_name')
    {{ $personData['personal']['fullName'] ?? 'Portfolio' }}
@endsection

@section('twitter_title')
    {{ $personData['personal']['fullName'] ?? 'Portfolio' }}
@endsection

@section('twitter_description')
    {{ $personData['personal']['shortBio'] ?? 'Personal portfolio website' }}
@endsection

@section('twitter_image')
    {{ !empty($personData['personal']['profilePhoto'])
        ? $personData['personal']['profilePhoto']
        : asset('images/og-default.jpg') }}
@endsection


{{-- Page Content --}}
@section('content')

<x-global.hero
        :personData="$personData"
    />

    <x-about.about-section
        :personData="$personData"
    />

    <x-skills.skills-section
        :personData="$personData"
    />

    <x-experience.experience-section
        :personData="$personData"
    />

    <x-projects.projects-section
        :personData="$personData"
    />

    <x-services.services-section
        :personData="$personData"
    />

    <x-contact.contact-section
        :personData="$personData"
    />

@endsection
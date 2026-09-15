@extends('layouts.app')

@section('title', 'Blog | ' . ($personData['personal']['fullName'] ?? 'Portfolio'))

@section('meta_description', 'Articles, thoughts, tutorials, and insights by ' . ($personData['personal']['fullName'] ?? 'this author') . '.')

@section('content')

<section class="bg-gray-50">
    <div class="mx-auto max-w-7xl px-6 py-20 lg:py-28">

        <div class="max-w-3xl">
            <p class="text-sm font-semibold uppercase tracking-widest text-gray-500">
                Writing
            </p>

            <h1 class="mt-3 text-4xl font-bold tracking-tight text-gray-950 sm:text-5xl">
                Blog
            </h1>

            <p class="mt-5 text-lg leading-8 text-gray-600">
                Articles, tutorials, ideas, and experiences.
            </p>
        </div>

        <div class="mt-12 rounded-2xl border border-gray-200 bg-white p-10 text-center">

            <h2 class="text-xl font-semibold text-gray-900">
                No articles published yet
            </h2>

            <p class="mt-3 text-gray-600">
                New articles and posts will appear here.
            </p>

        </div>

    </div>
</section>
@endsection
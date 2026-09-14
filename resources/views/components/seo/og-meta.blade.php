{{-- Open Graph --}}
<meta
    property="og:title"
    content="@yield(
        'og_title',
        View::getSection('title', 'Portfolio')
    )"
>

<meta
    property="og:description"
    content="@yield(
        'og_description',
        View::getSection(
            'meta_description',
            'Personal portfolio website'
        )
    )"
>

<meta
    property="og:image"
    content="@yield(
        'og_image',
        asset('images/og-default.jpg')
    )"
>

<meta
    property="og:url"
    content="@yield(
        'og_url',
        url()->current()
    )"
>

<meta
    property="og:type"
    content="@yield(
        'og_type',
        'website'
    )"
>

<meta
    property="og:site_name"
    content="@yield(
        'og_site_name',
        'Portfolio'
    )"
>

<meta
    property="og:locale"
    content="@yield(
        'og_locale',
        'en_US'
    )"
>


{{-- Optional Image Information --}}
@if(View::hasSection('og_image_width'))
    <meta
        property="og:image:width"
        content="@yield('og_image_width')"
    >
@endif

@if(View::hasSection('og_image_height'))
    <meta
        property="og:image:height"
        content="@yield('og_image_height')"
    >
@endif

@if(View::hasSection('og_image_alt'))
    <meta
        property="og:image:alt"
        content="@yield('og_image_alt')"
    >
@endif


{{-- Twitter / X --}}
<meta
    name="twitter:card"
    content="@yield(
        'twitter_card',
        'summary_large_image'
    )"
>

<meta
    name="twitter:title"
    content="@yield(
        'twitter_title',
        View::getSection(
            'og_title',
            View::getSection('title', 'Portfolio')
        )
    )"
>

<meta
    name="twitter:description"
    content="@yield(
        'twitter_description',
        View::getSection(
            'og_description',
            View::getSection(
                'meta_description',
                'Personal portfolio website'
            )
        )
    )"
>

<meta
    name="twitter:image"
    content="@yield(
        'twitter_image',
        View::getSection(
            'og_image',
            asset('images/og-default.jpg')
        )
    )"
>


@if(View::hasSection('twitter_site'))
    <meta
        name="twitter:site"
        content="@yield('twitter_site')"
    >
@endif

@if(View::hasSection('twitter_creator'))
    <meta
        name="twitter:creator"
        content="@yield('twitter_creator')"
    >
@endif
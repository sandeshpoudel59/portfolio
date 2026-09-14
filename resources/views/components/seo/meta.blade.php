{{-- Page Title --}}
<title>
    @yield('title', 'Portfolio')
</title>


{{-- Basic SEO Description --}}
<meta
    name="description"
    content="@yield(
        'meta_description',
        'Personal portfolio website'
    )"
>


{{-- Author --}}
<meta
    name="author"
    content="@yield(
        'meta_author',
        'Your Name'
    )"
>


{{-- Search Engine Instructions --}}
<meta
    name="robots"
    content="@yield(
        'meta_robots',
        'index, follow'
    )"
>


{{-- Canonical URL --}}
<link
    rel="canonical"
    href="@yield(
        'canonical_url',
        url()->current()
    )"
>


{{-- Theme Color --}}
<meta
    name="theme-color"
    content="@yield(
        'theme_color',
        '#ffffff'
    )"
>


{{-- Language --}}
<meta
    http-equiv="content-language"
    content="@yield(
        'meta_language',
        'en'
    )"
>


{{-- Additional SEO Metadata --}}
@stack('seo')
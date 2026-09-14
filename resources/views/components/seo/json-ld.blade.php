@php
    /*
    |--------------------------------------------------------------------------
    | Portfolio Data
    |--------------------------------------------------------------------------
    */

    $personal = $personData['personal'] ?? [];
    $contact = $personData['contact'] ?? [];
    $socialLinks = $personData['socialLinks'] ?? [];


    /*
    |--------------------------------------------------------------------------
    | Basic Person Information
    |--------------------------------------------------------------------------
    */

    $personName = $personal['fullName'] ?? 'Your Name';

    $personTitle = $personal['professionalTitle']
        ?? 'Software Engineer';

    $personDescription = $personal['shortBio']
        ?? 'Personal portfolio website';

    $profileImage = $personal['profilePhoto']
        ?? asset('images/default-profile.png');

    $websiteUrl = $contact['website']
        ?? url('/');

    $professionalEmail = $contact['professionalEmail']
        ?? null;


    /*
    |--------------------------------------------------------------------------
    | Social Profiles
    |--------------------------------------------------------------------------
    */

    $socialProfiles = [];

    foreach ($socialLinks as $platform => $socialUrl) {
        if (
            $platform !== 'other' &&
            !empty($socialUrl) &&
            is_string($socialUrl)
        ) {
            $socialProfiles[] = $socialUrl;
        }
    }

    if (!empty($socialLinks['other']) && is_array($socialLinks['other'])) {
        foreach ($socialLinks['other'] as $socialUrl) {
            if (
                !empty($socialUrl) &&
                is_string($socialUrl)
            ) {
                $socialProfiles[] = $socialUrl;
            }
        }
    }

    $socialProfiles = array_values(
        array_unique($socialProfiles)
    );


    /*
    |--------------------------------------------------------------------------
    | Person Schema
    |--------------------------------------------------------------------------
    */

    $personSchema = [
        '@context' => 'https://schema.org',
        '@type' => 'Person',
        'name' => $personName,
        'jobTitle' => $personTitle,
        'description' => $personDescription,
        'url' => $websiteUrl,
        'image' => $profileImage,
    ];

    if (!empty($professionalEmail)) {
        $personSchema['email'] = 'mailto:' . $professionalEmail;
    }

    if (!empty($socialProfiles)) {
        $personSchema['sameAs'] = $socialProfiles;
    }


    /*
    |--------------------------------------------------------------------------
    | Website Schema
    |--------------------------------------------------------------------------
    */

    $websiteSchema = [
        '@context' => 'https://schema.org',
        '@type' => 'WebSite',
        'name' => $personName . ' - Portfolio',
        'url' => url('/'),
        'description' => $personDescription,
        'publisher' => [
            '@type' => 'Person',
            'name' => $personName,
        ],
    ];


    /*
    |--------------------------------------------------------------------------
    | WebPage Schema
    |--------------------------------------------------------------------------
    */

    $webPageSchema = [
        '@context' => 'https://schema.org',
        '@type' => 'WebPage',
        'name' => $personName . ' - Portfolio',
        'url' => url('/'),
        'description' => $personDescription,
        'isPartOf' => [
            '@type' => 'WebSite',
            'name' => $personName . ' - Portfolio',
            'url' => url('/'),
        ],
        'about' => [
            '@type' => 'Person',
            'name' => $personName,
        ],
    ];
@endphp


{{-- 
|--------------------------------------------------------------------------
| Person JSON-LD
|--------------------------------------------------------------------------
--}}

<script type="application/ld+json">
{!! json_encode(
    $personSchema,
    JSON_UNESCAPED_SLASHES |
    JSON_UNESCAPED_UNICODE |
    JSON_PRETTY_PRINT
) !!}
</script>


{{-- 
|--------------------------------------------------------------------------
| Website JSON-LD
|--------------------------------------------------------------------------
--}}

<script type="application/ld+json">
{!! json_encode(
    $websiteSchema,
    JSON_UNESCAPED_SLASHES |
    JSON_UNESCAPED_UNICODE |
    JSON_PRETTY_PRINT
) !!}
</script>


{{-- 
|--------------------------------------------------------------------------
| WebPage JSON-LD
|--------------------------------------------------------------------------
--}}

<script type="application/ld+json">
{!! json_encode(
    $webPageSchema,
    JSON_UNESCAPED_SLASHES |
    JSON_UNESCAPED_UNICODE |
    JSON_PRETTY_PRINT
) !!}
</script>
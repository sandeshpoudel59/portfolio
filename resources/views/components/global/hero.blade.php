<section
    id="home"
    class="border-b border-gray-100 bg-gray-50"
>

    <x-global.container>

        <div class="grid items-center gap-12 py-24 lg:grid-cols-2 lg:py-32">

            <div class="flex justify-center lg:order-2">

                <div class="h-64 w-64 overflow-hidden rounded-full border-8 border-white bg-gray-200 shadow-xl">

                    <img
                        src="{{ $personData['personal']['profilePhoto'] ?? asset('images/default-profile.png') }}"
                        alt="{{ $personData['personal']['fullName'] ?? 'Profile photo' }}"
                        class="h-full w-full object-cover"
                    >

                </div>

            </div>

            <div class="lg:order-1">

                <p class="text-sm font-semibold uppercase tracking-widest text-gray-500">
                    Hello, I'm
                </p>

                <h1 class="mt-3 text-5xl font-bold tracking-tight text-gray-950 sm:text-6xl">
                    {{ $personData['personal']['fullName'] ?? 'Your Name' }}
                </h1>

                <h2 class="mt-4 text-2xl font-semibold text-gray-600">
                    {{ $personData['personal']['professionalTitle'] ?? 'Software Engineer' }}
                </h2>

                @if(!empty($personData['personal']['shortBio']))
                    <p class="mt-6 max-w-2xl text-lg leading-8 text-gray-600">
                        {{ $personData['personal']['shortBio'] }}
                    </p>
                @endif

                @if(
                    !empty($personData['personal']['location']['city']) ||
                    !empty($personData['personal']['location']['country'])
                )

                    <p class="mt-4 text-sm text-gray-500">

                        {{ $personData['personal']['location']['city'] ?? '' }}

                        @if(
                            !empty($personData['personal']['location']['city']) &&
                            !empty($personData['personal']['location']['country'])
                        )
                            ,
                        @endif

                        {{ $personData['personal']['location']['country'] ?? '' }}

                    </p>

                @endif

                @if(!empty($personData['availability']['status']))

                    <div class="mt-5">

                        <span class="inline-flex items-center rounded-full bg-green-50 px-3 py-1 text-sm font-medium text-green-700">

                            <span class="mr-2 h-2 w-2 rounded-full bg-green-500"></span>

                            {{ $personData['availability']['status'] }}

                        </span>

                    </div>

                @endif

                <div class="mt-8 flex flex-wrap gap-4">

                    <x-global.button href="#projects">
                        View Projects
                    </x-global.button>

                    <x-global.button
                        href="#contact"
                        variant="outline"
                    >
                        Contact Me
                    </x-global.button>

                </div>

            </div>

        </div>

    </x-global.container>

</section>
<form
    method="POST"
    action="{{ $action ?? '#' }}"
    {{ $attributes->merge(['class' => 'space-y-6']) }}
>
    @csrf

    <div>
        <label
            for="name"
            class="block text-sm font-medium text-gray-900"
        >
            Name
        </label>

        <input
            id="name"
            name="name"
            type="text"
            value="{{ old('name') }}"
            required
            class="mt-2 block w-full rounded-lg border border-gray-300 px-4 py-3 text-sm outline-none transition focus:border-gray-900 focus:ring-1 focus:ring-gray-900"
        >

        @error('name')
            <p class="mt-2 text-sm text-red-600">
                {{ $message }}
            </p>
        @enderror
    </div>

    <div>
        <label
            for="email"
            class="block text-sm font-medium text-gray-900"
        >
            Email
        </label>

        <input
            id="email"
            name="email"
            type="email"
            value="{{ old('email') }}"
            required
            class="mt-2 block w-full rounded-lg border border-gray-300 px-4 py-3 text-sm outline-none transition focus:border-gray-900 focus:ring-1 focus:ring-gray-900"
        >

        @error('email')
            <p class="mt-2 text-sm text-red-600">
                {{ $message }}
            </p>
        @enderror
    </div>

    <div>
        <label
            for="message"
            class="block text-sm font-medium text-gray-900"
        >
            Message
        </label>

        <textarea
            id="message"
            name="message"
            rows="6"
            required
            class="mt-2 block w-full rounded-lg border border-gray-300 px-4 py-3 text-sm outline-none transition focus:border-gray-900 focus:ring-1 focus:ring-gray-900"
        >{{ old('message') }}</textarea>

        @error('message')
            <p class="mt-2 text-sm text-red-600">
                {{ $message }}
            </p>
        @enderror
    </div>

    <x-global.button type="submit">
        Send Message
    </x-global.button>

</form>
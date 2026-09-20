<footer class="border-t border-gray-200 bg-white">
    <div class="px-4 py-5 sm:px-6 lg:px-8">
    <div class="flex flex-col gap-2 text-center text-xs text-gray-500 sm:flex-row sm:items-center sm:justify-between sm:text-left">

        <p>
            &copy; {{ date('Y') }}
            {{ config('app.name', 'Portfolio') }}.
            Administration Panel.
        </p>

        <div class="flex items-center justify-center gap-4 sm:justify-end">
            <a
                href="{{ route('home') }}"
                target="_blank"
                rel="noopener noreferrer"
                class="hover:text-gray-900"
            >
                View Website
            </a>

            <span aria-hidden="true">•</span>

            <span>
                {{ app()->environment() }}
            </span>
        </div>

    </div>

</div>

</footer>
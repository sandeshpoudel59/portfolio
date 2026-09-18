<aside class="hidden w-72 shrink-0 border-r border-gray-200 bg-white lg:block">
    <div class="sticky top-0 flex h-screen flex-col">
        <div class="border-b border-gray-200 px-6 py-5">
            <a href="{{ route('admin.dashboard') }}" class="text-lg font-bold">
                Portfolio Admin
            </a>
        </div>

        <x-admin.layout.navigation />

        <div class="mt-auto border-t border-gray-200 p-4">
            <a href="{{ route('home') }}" target="_blank"
               class="block rounded-lg px-3 py-2 text-sm text-gray-600 hover:bg-gray-100 hover:text-gray-900">
                View Website
            </a>
        </div>
    </div>
</aside>

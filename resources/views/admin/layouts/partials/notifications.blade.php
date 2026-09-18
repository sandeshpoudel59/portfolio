@if (session('success')) <div class="border-b border-green-200 bg-green-50 px-4 py-3 text-sm text-green-800"> <div class="mx-auto flex max-w-7xl items-center justify-between sm:px-6 lg:px-8"> <span>{{ session('success') }}</span>

        <button
            type="button"
            onclick="this.parentElement.parentElement.remove()"
            class="ml-4 text-green-700 hover:text-green-900"
            aria-label="Dismiss notification"
        >
            &times;
        </button>
    </div>
</div>

@endif

@if (session('error')) <div class="border-b border-red-200 bg-red-50 px-4 py-3 text-sm text-red-800"> <div class="mx-auto flex max-w-7xl items-center justify-between sm:px-6 lg:px-8"> <span>{{ session('error') }}</span>

        <button
            type="button"
            onclick="this.parentElement.parentElement.remove()"
            class="ml-4 text-red-700 hover:text-red-900"
            aria-label="Dismiss notification"
        >
            &times;
        </button>
    </div>
</div>

@endif

@if ($errors->any()) <div class="border-b border-red-200 bg-red-50 px-4 py-3 text-sm text-red-800"> <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">

        <p class="font-semibold">
            Please correct the following errors:
        </p>

        <ul class="mt-2 list-inside list-disc">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>

    </div>
</div>
@endif

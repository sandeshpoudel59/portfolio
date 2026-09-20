@if (session('success')) <div class="mb-6 rounded-lg border border-green-200 bg-green-50 p-4 text-sm text-green-800">
{{ session('success') }} </div>
@endif

@if (session('error')) <div class="mb-6 rounded-lg border border-red-200 bg-red-50 p-4 text-sm text-red-800">
{{ session('error') }} </div>
@endif

@if (session('warning')) <div class="mb-6 rounded-lg border border-yellow-200 bg-yellow-50 p-4 text-sm text-yellow-800">
{{ session('warning') }} </div>
@endif

@if (session('info')) <div class="mb-6 rounded-lg border border-blue-200 bg-blue-50 p-4 text-sm text-blue-800">
{{ session('info') }} </div>
@endif

@if ($errors->any()) <div class="mb-6 rounded-lg border border-red-200 bg-red-50 p-4">

    <p class="text-sm font-semibold text-red-800">
        Please correct the following errors:
    </p>

    <ul class="mt-2 list-disc space-y-1 pl-5 text-sm text-red-700">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>

</div>
@endif
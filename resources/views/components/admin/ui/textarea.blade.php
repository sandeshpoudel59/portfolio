@props([
    'name',
    'label' => null,
    'rows' => 5,
    'required' => false,
])

<div>
    @if ($label)
        <label for="{{ $name }}" class="mb-2 block text-sm font-medium text-gray-700">
            {{ $label }}
        </label>
    @endif

    <textarea
        id="{{ $name }}"
        name="{{ $name }}"
        rows="{{ $rows }}"
        @required($required)
        {{ $attributes->merge([
            'class' => 'block w-full rounded-lg border-gray-300 px-3 py-2.5 text-sm shadow-sm focus:border-gray-900 focus:ring-gray-900',
        ]) }}
    >{{ $slot }}</textarea>
</div>

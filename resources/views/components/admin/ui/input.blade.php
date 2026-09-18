@props([
    'name',
    'label' => null,
    'type' => 'text',
    'value' => null,
    'placeholder' => null,
    'required' => false,
])

<div>
    @if ($label)
        <label for="{{ $name }}" class="mb-2 block text-sm font-medium text-gray-700">
            {{ $label }}
        </label>
    @endif

    <input
        id="{{ $name }}"
        name="{{ $name }}"
        type="{{ $type }}"
        value="{{ $value }}"
        placeholder="{{ $placeholder }}"
        @required($required)
        {{ $attributes->merge([
            'class' => 'block w-full rounded-lg border-gray-300 px-3 py-2.5 text-sm shadow-sm focus:border-gray-900 focus:ring-gray-900',
        ]) }}
    >

    @error(str_replace(['[', ']'], ['.', ''], $name))
        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
    @enderror
</div>

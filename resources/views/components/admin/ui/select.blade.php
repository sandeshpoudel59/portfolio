@props(['name','label'=>null,'options'=>[],'value'=>null])
<div>
@if($label)<label for="{{ $name }}" class="mb-2 block text-sm font-medium text-gray-700">{{ $label }}</label>@endif
<select id="{{ $name }}" name="{{ $name }}" {{ $attributes->merge(['class'=>'block w-full rounded-lg border-gray-300 px-3 py-2.5 text-sm focus:border-gray-900 focus:ring-gray-900']) }}>
@foreach($options as $optionValue=>$optionLabel)<option value="{{ $optionValue }}" @selected((string)$value === (string)$optionValue)>{{ $optionLabel }}</option>@endforeach
</select>
</div>
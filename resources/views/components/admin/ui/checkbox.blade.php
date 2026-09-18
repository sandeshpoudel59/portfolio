@props(['name','label'=>null,'checked'=>false])
<label class="flex items-center gap-3">
<input type="checkbox" name="{{ $name }}" value="1" @checked($checked) {{ $attributes->merge(['class'=>'rounded border-gray-300 text-gray-900 focus:ring-gray-900']) }}>
@if($label)<span class="text-sm text-gray-700">{{ $label }}</span>@endif
</label>
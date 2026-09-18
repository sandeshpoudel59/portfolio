@props(['name','label'=>null,'checked'=>false])
<label class="flex items-center justify-between gap-4">
<span class="text-sm font-medium text-gray-700">{{ $label }}</span>
<input type="hidden" name="{{ $name }}" value="0">
<input type="checkbox" name="{{ $name }}" value="1" @checked($checked) {{ $attributes->merge(['class'=>'h-5 w-9 rounded-full border-gray-300 text-gray-900 focus:ring-gray-900']) }}>
</label>
@props(['label'=>'Actions'])
<div x-data="{open:false}" class="relative">
<button type="button" @click="open=!open" class="rounded-lg border border-gray-300 px-3 py-2 text-sm hover:bg-gray-50">{{ $label }}</button>
<div x-show="open" @click.outside="open=false" class="absolute right-0 z-30 mt-2 min-w-40 rounded-lg border border-gray-200 bg-white p-1 shadow-lg">{{ $slot }}</div>
</div>
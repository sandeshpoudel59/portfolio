@props(['title'=>'Confirm'])
<div x-data="{open:false}" x-show="open" x-cloak class="fixed inset-0 z-50 flex items-center justify-center bg-black/40 p-4">
<div @click.outside="open=false" class="w-full max-w-lg rounded-xl bg-white p-6 shadow-xl"><h2 class="font-semibold">{{ $title }}</h2><div class="mt-4">{{ $slot }}</div></div>
</div>
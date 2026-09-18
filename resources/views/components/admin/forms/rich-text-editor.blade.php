@props(['name','label'=>null,'rows'=>10])
<x-admin.ui.textarea :name="$name" :label="$label" :rows="$rows" {{ $attributes }}>{{ $slot }}</x-admin.ui.textarea>
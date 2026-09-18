@props(['name','label'=>null,'value'=>null])
<x-admin.ui.input type="date" :name="$name" :label="$label" :value="$value" {{ $attributes }} />
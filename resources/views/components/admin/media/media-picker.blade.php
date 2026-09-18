@props(['name'=>'media','label'=>'Select media'])
<x-admin.forms.image-upload :name="$name" :label="$label" {{ $attributes }} />
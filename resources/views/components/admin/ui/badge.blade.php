@props(['label' => null, 'variant' => 'default'])
@php
$variants = ['default'=>'bg-gray-100 text-gray-700','success'=>'bg-green-100 text-green-700','warning'=>'bg-yellow-100 text-yellow-700','danger'=>'bg-red-100 text-red-700','info'=>'bg-blue-100 text-blue-700'];
$class = $variants[$variant] ?? $variants['default'];
@endphp
<span {{ $attributes->merge(['class'=>"inline-flex rounded-full px-2.5 py-1 text-xs font-medium {$class}"]) }}>{{ $label ?? $slot }}</span>
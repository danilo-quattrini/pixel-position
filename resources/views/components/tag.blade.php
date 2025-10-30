@props(['size' => 'base'])
@php
    $classes = 'rounded-xl bg-white/10 font-bold hover:bg-white/25 transition-colors duration-300';
    if($size === 'base'){
        $classes .= ' px-5 py-1  text-sm ';
    }else if($size === 'small'){
        $classes .= ' px-3 py-1  text-2xs ';
    }
@endphp

<a {{$attributes->merge(['class' => $classes ])}}>
    {{$slot}}
</a>

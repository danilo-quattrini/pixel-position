@php
    $classes = 'bg-white/5 p-4 border border-transparent hover:border-blue-800 cursor-pointer group transition-colors duration-300  rounded-xl'
@endphp
<div {{$attributes(['class' => $classes])}}>
    {{$slot}}
</div>

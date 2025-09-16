@php
    $classes = 'p-4 bg-red bg-white/5 rounded-xl border border-transparent hover:border-blue-600 group transition-color duration-300'

@endphp

<div {{ $attributes(['class' => $classes]) }}>


{{ $slot }}
</div>

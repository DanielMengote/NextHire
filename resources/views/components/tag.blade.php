@props([
    'tag',
    'size' => 'base'
])

@php

    $classes = 'font-bold bg-white/10 hover:bg-white/25 px-3 py-1 rounded-xl transition-color duration-300';

    if ($size === 'base') {
        $classes .= ' text-sm px-5';
    }

    if ($size === 'small') {
        $classes .= ' px-3 text-2xs ';
    }

@endphp

<a href="/tags/{{ $tag->name}}" class="{{ $classes }}">{{ $tag->name}}</a>
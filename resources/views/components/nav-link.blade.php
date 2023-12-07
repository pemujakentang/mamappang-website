@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center text-white font-averialibre hover:font-averialibrebold text-xl '
            : 'inline-flex items-center text-orange-800 font-averialibre hover:font-averialibrebold text-xl';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>

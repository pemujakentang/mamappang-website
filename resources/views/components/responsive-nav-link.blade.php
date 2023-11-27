@props(['active'])

@php
$classes = ($active ?? false)
            ? 'block w-full ps-3 pe-4 py-1 text-white text-start text-base font-medium text-orange-800 font-averialibrebold hover:font-averialibrebold text-2xl transition duration-150 ease-in-out'
            : 'block w-full ps-3 pe-4 py-2 text-start text-base font-medium text-orange-800 font-averialibre hover:font-averialibrebold text-2xl transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>

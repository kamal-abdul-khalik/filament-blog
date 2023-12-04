@props(['active'])

@php
    $classes = $active ?? false ? 'inline-flex items-center hover:text-yellow-900 text-sm text-yellow-500 transition duration-150 ease-in-out' : 'inline-flex items-center hover:text-yellow-900 text-sm text-yellow-500 transition duration-150 ease-in-out';
@endphp

<a wire:navigate {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>

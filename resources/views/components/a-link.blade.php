@props(['active' => false])

@php
    $classes =
        'border-b md:border-none px-2.5 py-2 font-medium text-gray-800 transition-colors duration-300 transform hover:text-blue-600 md:mx-2';
@endphp
<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>

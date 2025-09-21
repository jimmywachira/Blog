@props(['active'])

@php
$classes = ($active ?? false)
? 'inline-flex items-center px-4 py-2 border-2 rounded-full text-center border-white dark:border-white text-xl font-bold text-white dark:text-white focus:outline-none focus:border-white/50 transition duration-150 ease-in-out'
: 'inline-flex items-center px-1 pt-1 text-sm font-semibold text-white/50 dark:text-white hover:text-white hover:border-white/50 dark:hover:text-blue-300 dark:hover:border-white/50 focus:outline-none focus:text-blue-700 dark:focus:text-blue-300 focus:border-blue-300 dark:focus:border-blue-700 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>

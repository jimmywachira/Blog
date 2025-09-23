@props(['active'])

@php
$classes = ($active ?? false)
? 'inline-flex items-center capitalize px-4 py-2 border-2 rounded-full text-center border-blue-700 hover:border-blue-800 dark:border-blue-800 dark:hover:border-blue-800 text-2xl text-blue-700 font-bold focus:outline-none dark:text-blue-800 focus:border-white/50 transition duration-150 ease-in-out shadow-lg shadow-blue-500/20 hover:shadow-blue-500/40 hover:scale-[1.02]'
: 'inline-flex items-center px-1 pt-1 text-sm font-semibold text-white/50 dark:text-white/50 hover:text-white hover:border-white/50 dark:hover:text-white dark:hover:border-white/50 focus:outline-none focus:text-blue-700 dark:focus:text-blue-300 focus:border-blue-300 dark:focus:border-blue-700 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>

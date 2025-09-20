@props(['active' => false])

<a {{ $attributes->class([
    'rounded-md px-3 py-2 text-sm font-medium transition-colors duration-200',
    'bg-white/10 text-white' => $active,
    'text-white/70 hover:bg-white/5 hover:text-white' => !$active
]) }} aria-current="{{ $active ? 'page' : 'false' }}">
    {{ $slot }}
</a>

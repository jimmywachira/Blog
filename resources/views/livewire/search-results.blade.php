<div class="absolute z-10 w-full origin-top-right rounded-md bg-white/10 backdrop-blur-sm shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none">
    <div class="py-1" role="none">
        @forelse($results as $result)
        <a wire:navigate.hover href="/articles/{{ $result->id }}" class="text-white/80 hover:bg-white/5 hover:text-white block px-4 py-2 text-sm" role="menuitem" tabindex="-1" wire:key="{{ $result->id }}">{{ $result->title }}</a>
        @empty
        <p class="px-4 py-2 text-sm text-white/50">No results found.</p>
        @endforelse
    </div>
</div>

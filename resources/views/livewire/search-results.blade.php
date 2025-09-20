<div x-data="{ show: @entangle('show') }" x-show="show" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95" class="absolute z-10 mt-2 w-full origin-top-right rounded-md bg-white/10 backdrop-blur-sm shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" style="display: none;">
    <div class="py-1" role="none">
        @forelse($results as $result)
        <a wire:navigate.hover href="/articles/{{ $result->id }}" class="text-white/80 hover:bg-white/5 hover:text-white block px-4 py-2 text-sm" role="menuitem" tabindex="-1" wire:key="{{ $result->id }}">{{ $result->title }}</a>
        @empty
        <p class="px-4 py-2 text-sm text-white/50">No results found.</p>
        @endforelse
    </div>
</div>

<div class="{{ $show ? 'block' : 'hidden' }}">
    <div class="bg-inherit absolute border-2 border-blue-700 m-2 p-2">

        {{-- <div class="absolute top-0 right-0 p-1">
            <button type="button" wire:click="dispatch('search.clear-results')" aria-label="close" class="text-white">x</button>
        </div> --}}

        @if(count($results) == 0)
        <div class="p-2 text-white">
            No results found.
        </div>
        @endif

        @foreach($results as $result)
        <div class="p-2 m-2 text-white border-b border-gray-300" wire:key="{{ $result->id }}">
            <a wire:navigate.hover href="/articles/{{ $result->id }}">{{ $result->title }}</a>
        </div>
        @endforeach
    </div>
</div>

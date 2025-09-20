<div class="relative">
    <form>
        <div class="relative">
            <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                <ion-icon name="search-outline" class="h-5 w-5 text-white/50"></ion-icon>
            </span>
            <input class="w-full rounded-md border-0 bg-white/5 py-1.5 pl-10 pr-4 text-white ring-1 ring-inset ring-white/10 placeholder:text-white/50 focus:ring-2 focus:ring-inset focus:ring-blue-500 sm:text-sm sm:leading-6" wire:model.live.debounce.300ms="searchText" type="text" placeholder="{{ $placeholder ?? 'Search here...' }}" />
        </div>
    </form>

    <livewire:search-results :results="$results" :show="!empty($searchText)" />
</div>

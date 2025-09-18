<div>
    <form>
        <div class="mt-2">
            <input class="w-full p-4 text-black border-2 border-blue-700" wire:model.live="searchText" type="text" placeholder="search articles!" />

            {{-- <button wire:click.prevent="clear()" class="m-2 text-white bg-blue-700 disabled:bg-inherit hover:text-black px-4 py-2 rounded-full" {{ empty($searchText) ? 'disabled' : '' }}>
            clear
            </button> --}}
        </div>
    </form>

    <livewire:search-results :results="$results" :show="!empty($searchText)" />

    <div>

    </div>

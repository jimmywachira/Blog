<div>
    <form wire:submit.prevent="search">
        <div class="w-full mt-2">
            <input wire:model.live="searchText" class="p-2 w-full border text-white bg-blue-500 rounded" type="text" name="query" placeholder="Search articles..." value="{{ request('query') }}">
        </div>
    </form>

    <div class="mt-4">
        @foreach($results as $result)
        <div class="p-2 border-b border-gray-300">
            {{ $result->title }}
        </div>
        @endforeach
    </div>
</div>

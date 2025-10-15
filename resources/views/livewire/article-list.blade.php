<div>
    <div class="m-auto mb-4">
        <div class="mb-3 flex justify-between items-center">
            <a href="/dashboard/articles/create" wire:navigate class="p-4 animate-pulse rounded-full text-center border hover:border-2 hover:border-white/50 dark:border-white text-white dark:text-white focus:outline-none focus:border-blue-700 transition duration-150 ease-in-out">
                Create Article
            </a>

            <div class="flex gap-2">
                <button @class([ 'text-gray-200 p-2 hover:bg-blue-700' , 'bg-blue-700'=> $showOnlyPublished,
                    'bg-gray-700/20' => !$showOnlyPublished
                    ]) wire:click="togglePublished(false)">
                    show all
                </button>

                <button @class([ 'text-gray-200 p-2 hover:bg-blue-700' , 'bg-blue-700'=> $showOnlyPublished,
                    'bg-gray-700/20' => !$showOnlyPublished
                    ]) wire:click="togglePublished(true)">
                    show published (
                    <livewire:published-count placeholder-text="Loading..." />
                    )
                </button>
            </div>
        </div>
    </div>

    <h1 class="text-3xl text-center p-4 text-white mb-4">Articles</h1>

    {{-- @if (session()->has('message'))
    <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 3000)" x-show="show" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform translate-y-2" x-transition:enter-end="opacity-100 transform translate-y-0" x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 transform translate-y-0" x-transition:leave-end="opacity-0 transform translate-y-2" class="fixed top-2 right-2 bg-black/20 backdrop-blur-sm border-2 border-blue-500 text-white px-4 py-2 shadow-lg z-50">
        <p>{{ session('message') }}</p>
</div>
@endif --}}

@if (session()->has('message'))
<div class="top-2 right-2 backdrop-blur-sm rounded-full border-2 border-blue-500 text-blue-500 px-4 py-2 shadow-lg z-50">
    {{ session('message') }}
</div>
@endif


<table class="w-full table-auto bg-inherit shadow backdrop-blur-lg">
    <thead class="px-6 py-3 capitalize text-left">
        <tr class="text-white bg-black/50">
            <th class="border px-4 py-2">ID</th>
            <th class="border px-4 py-2">Title</th>
            <th class="border px-4 py-2 text-center">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($this->articles as $article)
        <tr class="border-b text-white" wire:key="{{ $article->id }}">
            <td class="px-4 py-2">{{ $article->id }}</td>
            <td class="px-4 py-2">{{ $article->title }}</td>
            <td class="px-4 py-2 space-x-2 capitalize">
                <a class="'inline-flex items-center px-3 py-2 text-center hover:text-blue-700 lowercase text-blue-900 dark:text-blue-300 focus:outline-none focus:border-blue-700 transition duration-150 ease-in-out" href="/dashboard/articles/{{ $article->id }}/edit">
                    edit
                </a>
                <button wire:click="delete({{ $article->id }})" wire:confirm="confirm article delete?" class=" text-red-500 hover:text-red-700 px-3 py-1">delete</button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<div class="mt-4 pt-4">
    {{ $this->articles->links() }}
</div>
</div>
</div>

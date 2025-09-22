<div>
    <div class="m-auto mb-4">
        <div class="mb-3 flex justify-between items-center">
            <a href="/dashboard/articles/create" wire:navigate class="p-4 rounded-full text-center border hover:border-2 hover:border-white/50 dark:border-white text-white dark:text-white focus:outline-none focus:border-blue-700 transition duration-150 ease-in-out">
                Create Article
            </a>

            <div>
                <button wire:click="showAll" class="text-gray-200 border-2 border-transparent p-2 hover:border-blue-700">
                    show all
                </button>
                <button wire:click="showPublished" class="text-gray-200 border-2 border-transparent p-2 hover:border-blue-700">
                    show published (
                    <livewire:published-count placeholder-text="Loading..." />
                    )
                </button>
            </div>
        </div>
    </div>

    <h1 class="text-3xl text-center p-4 text-white mb-4">Articles</h1>

    @if (session()->has('message'))
    <div class="mb-4 px-6 py-3 w-3/4 text-blue-500 shadow border-2 border-blue-500">
        {{ session('message') }}
    </div>
    @endif

    <table class="w-full table-auto ">
        <thead class="px-6 py-3 capitalize text-left">
            <tr class="">
                <th class="border px-4 py-2">ID</th>
                <th class="border px-4 py-2">Title</th>
                <th class="border px-4 py-2 text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($articles as $article)
            <tr class="border-b" wire:key="{{ $article->id }}">
                <td class="px-4 py-2">{{ $article->id }}</td>
                <td class="px-4 py-2">{{ $article->title }}</td>
                <td class="px-4 py-2 space-x-2 capitalize">
                    <a class="'inline-flex items-center px-3 py-2 text-center hover:text-blue-700 shadow  lowercase text-blue-900 dark:text-blue-300 focus:outline-none focus:border-blue-700 transition duration-150 ease-in-out" href="/dashboard/articles/{{ $article->id }}/edit" wire:navigate>
                        edit
                    </a>
                    <button wire:click="delete({{ $article->id }})" wire:confirm="confirm article delete?" class=" text-red-500 hover:text-red-700 px-3 py-1">delete</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="mt-4 pt-4">
        {{ $articles->links() }}
    </div>
</div>
</div>

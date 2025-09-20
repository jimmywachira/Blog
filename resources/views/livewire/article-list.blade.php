<div class="m-auto mb-4 p-4">
    <h1 class="text-3xl text-center text-white mb-4">Articles</h1>

    @if (session()->has('message'))
    <div class="mb-4 p-4 text-green-500 shadow border border-green-500 rounded">
        {{ session('message') }}
    </div>
    @endif

    <table>
        <thead class="px-6 py-3 capitalize text-left">
            <tr class="">
                <th class="border px-4 py-2">ID</th>
                <th class="border px-4 py-2">Title</th>
                <th class="border px-4 py-2">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($articles as $article)
            <tr class="border" wire:key="article-{{ $article->id }}">
                <td class="px-4 py-2">{{ $article->id }}</td>
                <td class="px-4 py-2">{{ $article->title }}</td>
                <td class="px-4 py-2 space-x-2 capitalize">
                    <button class=" text-blue-700 rounded-sm hover:text-blue-900">edit</button>
                    <button wire:click="delete({{ $article->id }})" class=" text-red-700 rounded-sm hover:text-red-900">delete</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

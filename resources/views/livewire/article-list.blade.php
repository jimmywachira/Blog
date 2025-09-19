<div class="m-auto mb-4 p-4">
    <table>
        <thead class="px-6 py-3 uppercase ">
            <tr class="">
                <th class="border px-4 py-2">ID</th>
                <th class="border px-4 py-2">Title</th>
                <th class="border px-4 py-2">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($articles as $article)
            <tr class="border-b" wire:key="article-{{ $article->id }}">
                <td class="px-4 py-2">{{ $article->id }}</td>
                <td class="px-4 py-2">{{ $article->title }}</td>
                <td>
                    <button wire:click="delete({{ $article->id }})" class="p-2 text-red-700 rounded-sm hover:text-red-900">delete</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

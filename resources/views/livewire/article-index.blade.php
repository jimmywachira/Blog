<div class="m-auto">
    @foreach ($articles as $article)
    <div class="p-4 mt-5 rounded-l-full rounded-b-full shadow" wire:key="{{ $article->id }}">
        <h2 class="text-2xl text-black font-bold mb-3 hover:text-black/50">
            <a href="/articles/{{ $article->id }}">{{ $article->title }}</a>
        </h2>
        <p>{{ Str::words($article->content, 500) }}</p>
    </div>
    @endforeach
</div>

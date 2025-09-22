<div class="max-w-4xl mx-auto">
    <div class="space-y-8">
        @forelse ($articles as $article)
        <div class="bg-white/10 backdrop-blur-sm rounded-2xl shadow-lg overflow-hidden transition-all duration-300 hover:shadow-2xl hover:scale-[1.02]" wire:key="{{ $article->id }}">
            <a wire:navigate href="/articles/{{ $article->id }}" class="block text-white/50 hover:text-white transition">
                <div class="md:flex">
                    <div class="md:flex-shrink-0">
                        <img class="h-full w-full object-cover md:w-full" src="https://picsum.photos/seed/{{ $article->id }}/400/300" alt="{{ $article->title }}">
                    </div>
                    <div class="p-6 sm:p-8">
                        <h2 class="capitalize text-xl font-bold text-blue-700 mb-2">{{ $article->title }}</h2>
                        <p class="text-white/80 text-sm leading-relaxed tracking-wide">{{ Str::words($article->content, 240) }}</p>
                    </div>
                </div>
            </a>
        </div>
        @empty
        <p class="text-white/70 text-center">No articles found.</p>
        @endforelse
    </div>
    <div class="mt-4 pt-4">
        {{ $articles->links() }}
    </div>

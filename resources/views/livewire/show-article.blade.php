<div class="max-w-4xl mx-auto">
    <div class="bg-white/10 backdrop-blur-sm rounded-2xl shadow-lg overflow-hidden">
        <div class="p-6 sm:p-8">
            <div class="mb-6">
                <!-- You can replace this with a dynamic image source, for example from your article model -->
                <img src="https://picsum.photos/seed/{{ $article->id }}/800/400" alt="{{ $article->title }}" class="w-full h-64 object-cover rounded-lg shadow-md">
            </div>
            <h1 class="capitalize text-4xl font-bold text-blue-700 mb-4">{{ $article->title }}</h1>
            <div class="text-lg text-white/70 leading-relaxed space-y-4">
                <p>{{ $article->content }}</p>
            </div>
        </div>
    </div>
</div>

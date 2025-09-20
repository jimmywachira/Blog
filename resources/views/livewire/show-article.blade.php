<div class="max-w-4xl mx-auto">
    <div class="bg-white/10 backdrop-blur-sm rounded-2xl shadow-lg overflow-hidden">
        <div class="p-6 sm:p-8">
            <div class="mb-6">
                <!-- You can replace this with a dynamic image source, for example from your article model -->
                <img src="https://picsum.photos/seed/{{ $article->id }}/800/400" alt="{{ $article->title }}" class="w-full h-64 object-cover rounded-lg shadow-md">
            </div>
            <h1 class="text-4xl font-bold text-white mb-4">{{ $article->title }}</h1>
            <div class="text-lg text-white/70 leading-relaxed space-y-4">
                <p>{{ $article->content }}</p>
            </div>
        </div>
    </div>
</div>

{{-- <div class="m-auto w-1/2 rounded-l-full rounded-b-full shadow p-4 mt-5">
    <h2 class="text-3xl text-white">{{ $article->title }}</h2>
<div>
    <p class="text-white/50 mt-4">{{ $article->content }}</p>
</div>
</div> --}}

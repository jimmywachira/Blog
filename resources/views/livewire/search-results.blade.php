<div class="{{ $show ? 'block' : 'hidden' }}">
    <div class="mt-4 p-4 bg-inherit absolute border-2 border-blue-700">

        @if(count($results) == 0)
        <div class="p-2 text-white">
            No results found.
        </div>
        @endif

        @foreach($results as $result)
        <div class="p-2 text-white border-b border-gray-300">
            <a href="/articles/{{ $result->id }}">{{ $result->title }}</a>
        </div>
        @endforeach
    </div>
</div>

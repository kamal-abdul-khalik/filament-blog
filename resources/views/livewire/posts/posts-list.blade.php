<div class=" px-3 lg:px-7 py-6">
    <div class="flex justify-between items-center border-b border-gray-100">
        <div class="text-gray-500 font-semibold">
            @if ($search)
                Searching: {{ $search }}
            @endif
        </div>
        <div class="flex items-center space-x-4 font-light ">
            <button
                class="{{ $this->sort === 'desc' ? 'text-gray-900 border-b border-gray-700' : 'text-gray-500' }} py-4"
                wire:click="setSort('desc')">Latest</button>
            <button
                class="{{ $this->sort === 'asc' ? 'text-gray-900 border-b border-gray-700' : 'text-gray-500' }} py-4 "
                wire:click="setSort('asc')">Oldest</button>
        </div>
    </div>
    <div class="py-4">
        @if ($this->posts->count() > 1)
            @foreach ($this->posts as $post)
                <x-post.post-item :post="$post" />
            @endforeach
        @else
            nothing

        @endif
    </div>
    <div class="my-3">
        {{ $this->posts->onEachSide(1)->links() }}
    </div>
</div>

<section class="w-full gap-3 flex flex-col mx-auto mt-10" id="blogs">
    <p class="text-3xl font-bold mx-auto">BLOGS</p>
    <x-category-drop-down/>
            
    </div>
    <form class="search mx-auto flex gap-2 mt-3" action="" method="GET">
        @if (request('category'))
            <input type="hidden" name="category" value="{{request('category')}}" class="border-[1px] outline-none md:w-80 px-1  border-gray-500 rounded" placeholder="search blogs....">
        @endif
        @if (request('author'))
            <input type="hidden" name="author" value="{{request('author')}}" class="border-[1px] outline-none md:w-80 px-1  border-gray-500 rounded" placeholder="search blogs....">
        @endif
        
        <input type="text" name="search" class="border-[1px] outline-none md:w-80 px-1  border-gray-500 rounded" placeholder="search blogs....">
        <button type="submit" class="px-2 py-1 bg-blue-500 text-white rounded">Search</button>
    </form>
    <div class="cards w-full justify-between flex-wrap gap-3 mb-3 px-2 md:flex mt-6">
        @forelse ($blogs as $blog)
            <x-blog-card :blog="$blog"/>
        @empty
            <p class="mx-auto text-gray-500">No blogs found</p>
        @endforelse
        
    </div>

</section>
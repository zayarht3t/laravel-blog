<div class="card w-4/5 mx-auto cursor-pointer hover:border-blue-400 md:w-1/5 mb-2 text-center gap-3 border-[1px] border-gray-400 flex flex-col p-3 rounded">
    <img src="/storage/{{$blog->thumbnail}}" class="w-full" alt="">
    <p class="title text-md font-bold">{{$blog->title}}</p>
    <p class="author text-xs font-semibold">{{$blog->user->name}} - {{$blog->created_at->diffForHumans()}}</p>
    <div class="categories flex gap-2 w-full">
        <p class="category bg-green-500 text-white mx-auto rounded w-1/4 text-xs ">{{$blog->category->name}}</p>
        <p class="category bg-yellow-500 text-white mx-auto rounded w-1/4 text-xs ">HTML</p>
        <p class="category bg-gray-500 text-white mx-auto rounded w-1/4 text-xs ">javascript</p>
    </div>
    
    <p class="intro text-sm font-sans font-normal">{{$blog->intro}}</p>
    <a class="rounded mx-auto bg-blue-500 text-white px-2 py-1" href="/blogs/{{$blog->slug}}" >Read More</a>
</div>

<x-layout>
    <div class="mt-10 w-full flex flex-col  ">
        <img src="/storage/{{$blog->thumbnail}}" class="w-72 mx-auto" alt="">
        <p class="mx-auto md:text-xl mt-2 font-bold">{{$blog->title}}</p>
        <a class="mx-auto mt-2 font-semibold" href="/?author={{$blog->user->name}}">Author - {{$blog->user->name}}</a>
        <a class="mx-auto mt-2 bg-green-400 ax-1 rounded text-white font-bold" href="/?category={{$blog->category->name}}">{{$blog->category->name}}</a>
        @auth
            <form action="/blogs/{{$blog->slug}}/subscription" method="POST" class="flex my-2 gap-2 mx-auto">
            @csrf
            @if (auth()->user()->isSubscribed($blog))
                <button class="p-1 bg-red-500 text-white rounded" type="submit">unsubscribe</button>
            @else
                <button class="p-1 bg-blue-500 text-white rounded">subscribe</button>
            @endif 
            
        </form>
        @endauth
        
        <p class="mx-auto mt-2 text-gray-500"> {{$blog->created_at->diffForHumans()}}</p>
        <p class="text-center w-1/2 mx-auto md:text-md font-sans font-normal mt-2">{{$blog->body}}</p>
    </div>
    @auth
        <x-comment-form :blog="$blog"/>
    @else
        <p class="mx-auto my-3 flex justify-center">Please 
            <a href="/login" class="italic underline mx-2">login</a>
            to comment</p>
        
    @endauth
    
    <x-comments :comments="$blog->comments()->latest()->paginate(3)"/>
    <p class="m-10 font-bold md:text-2xl mx-auto text-center">Blogs You may Like</p>
    <x-blogSection :blogs="$randomBlogs" />
    
    <x-subscribe/>
</x-layout>
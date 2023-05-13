<div class="flex flex-col gap-2 border-[1px] rounded-sm border-gray-400 my-2 shadow mx-auto w-5/6 md:w-2/4 p-2">
    <div class="gap-2 flex items-center ">
        <img src="{{$comment->user->avatar}}" class="w-9 h-9 rounded-full" alt="">
        <div class="flex flex-col">
           <p class="username text-basef font-semibold">{{$comment->user->name}}</p>
            <p class="text-gray-500 text-xs">{{$comment->created_at->diffForHumans()}}</p>
        </div>
        
    </div>
    
    <p class="text-gray-600 text-sm">{{$comment->body}}</p>
</div>
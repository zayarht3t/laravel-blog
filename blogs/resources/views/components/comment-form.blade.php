<div class="flex justify-center  mx-auto p-3 my-3">
    <div class="w-1/2 shadow p-3">
        <form action="/blogs/{{$blog->slug}}/comments" method="POST" class="flex flex-col gap-2" >
        @csrf
        <textarea name="body" class="rounded outline-none border-[1px] p-2 border-gray-300" id="" cols="50" rows="3" placeholder="say something"></textarea>
        <button class="w-28 p-1 rounded bg-blue-500 text-white" type="submit">submit</button>
    </form>
    </div>
    
</div>
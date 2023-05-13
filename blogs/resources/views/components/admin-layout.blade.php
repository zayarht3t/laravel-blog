<x-layout>
    <div class="flex">
        <div class="table  my-5 p-3 border-[1px] h-fit border-gray-400 mx-2 rounded">
            <ul class="gap-3 flex flex-col ">
                <a class="text-sm font-bold font-sans text-blue-500 cursor-pointer" href="/admin/blogs">Dashboard</a>
                <a class="text-sm font-bold font-sans text-blue-500 cursor-pointer" href="">Blogs</a>
                <a class="text-sm font-bold font-sans text-blue-500 cursor-pointer">Users</a>
                <a class="text-sm font-bold font-sans text-blue-500 cursor-pointer" href="/admin/blogs/create">Create</a>
            </ul>
        </div>
        {{$slot}}
    </div>
</x-layout>
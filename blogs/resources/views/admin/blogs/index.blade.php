<x-admin-layout>
    <!-- component -->
<section class="antialiased w-full mt-5 bg-gray-100 text-gray-600 h-screen px-4">
    <div class="flex flex-col  justify-center h-full">
        <!-- Table -->
        <div class="w-full max-w-2xl mx-auto bg-white shadow-lg rounded-sm border border-gray-200">
            <header class="px-5 border-b border-gray-100 mt-2">
                <h2 class="font-semibold text-lg mx-2 text-gray-800">Posts</h2>
            </header>
            <div class="p-3">
                <div class="overflow-x-auto">
                    <table class="table-auto w-full">
                        <thead class="text-xs font-semibold uppercase text-gray-400 bg-gray-50">
                            <tr>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-left">Title</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-left">Intro</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-left">Action</div>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="text-sm divide-y divide-gray-100 gap-5">
                            @foreach ($blogs as $blog)
                            <tr>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <a href="/blogs/{{$blog->slug}}" class="font-medium text-gray-800">{{$blog->title}}</a>
                                    </div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-left">{{$blog->intro}}</div>
                                </td>
                                <td class="p-2 whitespace-nowrap flex gap-2">
                                    <form action="/admin/blogs/{{$blog->slug}}/edit">
                                        <button class="bg-yellow-500 w-fit p-1 rounded text-white">edit</button>
                                        
                                    </form>
                                    <form action="/admin/blogs/{{$blog->slug}}/delete" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="bg-red-500 w-fit p-1 rounded text-white">delete</button>
                                    </form>
                                    
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
</x-admin-layout>
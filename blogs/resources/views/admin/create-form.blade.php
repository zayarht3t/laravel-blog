<x-admin-layout>
    <div class="my-5 flex w-full justify-center">
        <form class="flex flex-col gap-4 items-center p-2 border-[1px] border-gray-200 shadow-md w-3/4" action="/admin/blogs/create" method="POST" enctype="multipart/form-data">
            @csrf
            <p class="text-2xl font-bold font-sans">Create a Post</p>
            <x-form.input name='title'/>
            <x-form.error name="title"/>
            <x-form.input name='intro'/>
            <x-form.error name="intro"/>
            <x-form.input name='slug'/>
            <x-form.error name="slug"/>
            <textarea name="body" id="" cols="30" rows="5"  placeholder="body" class="px-2 border-[1px] border-gray-300 w-3/4 py-1 rounded outline-none">{{old('body')}}</textarea>
            <x-form.error name="body"/>
            <input  type="file"  name="thumbnail" class="px-2 border-[1px] border-gray-300 w-3/4 py-1 rounded outline-none">
            <div class="flex items-center gap-2">
                <label for="category">Category: </label>
            <select id="category" name="category_id" class="p-1 border-[1px] border-gray-300 outline-none rounded">
                @foreach ($categories as $category)
                    <option {{$category->id == old('category_id') ? 'selected': ''}} value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
            <x-form.error name="category_id"/>

            </div>
            
            <button class="p-1 w-fit bg-blue-500 text-white rounded outline-none">POST</button>
        </form>
    </div>
</x-admin-layout>
<div class="mx-auto">
    <select name="language" onchange="location=this.value" id="language" class="p-1 border-[1px] mx-auto px-1 border-gray-400 rounded">       
        @foreach ($categories as $category)
                <option  value="/?category={{$category->name}}{{request('search') ? '&search='.request('search') : ''}}{{request('author') ? '&author='.request('author') : ''}}" selected><a href="/{{$category->name}}">{{$category->name}}</a></option>
            @endforeach
        
        </select>
</div>
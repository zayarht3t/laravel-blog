@props(['name','value'=>''])
<input required type="text"
    placeholder="{{$name}}" 
    value="{{old($name,$value)}}" 
    name="{{$name}}" 
    class="px-2 border-[1px] border-gray-300 w-3/4 py-1 rounded outline-none"/>
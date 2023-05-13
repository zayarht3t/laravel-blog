<x-layout>
    <div class="w-full flex items-center mt-6 mb-6 justify-center">
        <form class="rounded shadow-md border-[1px] border-gray-400 p-7 flex flex-col gap-3" method="POST" action="/login">
            @csrf
            <input type="email" value="{{old('email')}}" name="email" placeholder="email" value="{{old('email')}}" class="outline-none px-2 py-1 rounded border-[1px] border-gray-300" >
            @error('email')
                 <p class="text-red-600 text-sm">{{$message}}</p>
            @enderror
            <input type="password" name="password" placeholder="password" class="outline-none px-2 py-1 rounded border-[1px] border-gray-300" >
            @error('password')
                 <p class="text-red-600 text-sm">{{$message}}</p>
            @enderror
            <button class="p-1 text-center bg-blue-500 text-white rounded" type="submit">Register</button>
            <p class="text-gray-500">Already have an account? <a href="/" class="italic text-blue-500 font-bold underline">Login here</a></p>
        </form>  
    </div> 
</x-layout>
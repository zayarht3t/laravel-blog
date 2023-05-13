<nav class="w-full flex justify-between items-center sticky top-0 bg-black z-40 text-white p-4">
    <a class="logo font-bold text-2xl mx-5 cursor-pointer" href="/">
        Laravel
    </a>

    <div class="item flex gap-5 mx-5">
        <a href="/#home" class="text-blue-400 text-lg ">HOME</a>
        <a href="/#blogs" class="text-blue-400 text-lg ">BLOGS</a>
        @auth
            <p class="text-blue-400 text-lg">{{auth()->user()->name}}</p>
            <form action="/logout" method="POST">
                @csrf
                <button class="px-2 py-1 outline-none border-none text-blue-400 text-lg" type="submit">logout</button>
            </form>
        @else
            <a href="/register" class="text-blue-400 text-lg ">Register</a>
        @endauth
        <a href="/#subscribe" class="text-blue-400 text-lg ">SUBSCRIBE</a>
    </div>
</nav>
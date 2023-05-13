<section class="mt-4 flex flex-col p-3">
    <p class="text-lg mx-auto font-semibold">Comments ({{$comments->count()}})</p>
    @foreach ($comments as $comment)
        <x-comment :comment="$comment"/>
    @endforeach
    {{$comments->links()}}
    
</section>
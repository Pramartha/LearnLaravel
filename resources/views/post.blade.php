<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
        <article class="py-8 max-w-screen-md">
            <h1 class="mb-1 text-3xl font-bold text-gray-900 tracking-tight">{{$post['title']}}</h1>
            <div class="text-base text-gray-500">
                <a href="#">{{ $post->author->name }}</a> | {{$post->created_at->format('j F Y')}} | {{$post->created_at->diffForHumans()}}
            </div>

            <p class="my-4 font-light">{{$post['body']}}</p>
            <a href="/posts" class="font-medium text-blue-500 hover:underline">&laquo; Back to Post</a>
        </article>    
</x-layout>
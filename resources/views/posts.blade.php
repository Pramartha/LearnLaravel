<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    @foreach ( $posts as $post )

        <article class="py-8 max-w-screen-md border-b border-gray-300">
            <a href="/posts/{{$post['slug']}}" class="group">
                <h1 class="mb-1 text-3xl font-bold text-gray-900 tracking-tight group-hover:text-blue-400">{{$post['title']}}</h1>
            </a>
            <div class="text-base text-gray-500">
                <a href="#">{{$post['author']}}</a> | 15 Januari 2025
            </div>

            <p class="my-4 font-light">{{Str::limit($post['body'], 200)}}</p>
            <a href="/posts/{{$post['slug']}}" class="font-medium text-blue-500 hover:underline">Read more &raquo;</a>
        </article>

    @endforeach
    
</x-layout>
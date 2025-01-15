<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About Page', 'nama' => 'Pramartha']);
});


Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Artikel 1',
            'author' => 'Pramartha',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reiciendis architecto alias culpa ipsum pariatur at laudantium? Eligendi perferendis corporis, recusandae vitae culpa debitis! Nam eveniet quas nihil reiciendis qui dolores error inventore consequatur numquam, tenetur doloremque, minus commodi ex nemo?'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Artikel 2',
            'author' => 'Pramartha',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam fuga nobis dignissimos officia, deserunt autem quis! Quas libero expedita sequi aliquid, quis obcaecati amet quo saepe recusandae consectetur provident at.'
        ]
    ]]);
});

Route::get('/posts/{slug}', function ($slug){
    $posts = [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Artikel 1',
            'author' => 'Pramartha',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reiciendis architecto alias culpa ipsum pariatur at laudantium? Eligendi perferendis corporis, recusandae vitae culpa debitis! Nam eveniet quas nihil reiciendis qui dolores error inventore consequatur numquam, tenetur doloremque, minus commodi ex nemo?'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Artikel 2',
            'author' => 'Pramartha',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam fuga nobis dignissimos officia, deserunt autem quis! Quas libero expedita sequi aliquid, quis obcaecati amet quo saepe recusandae consectetur provident at.'
        ]
    ];

    $post = Arr::first($posts, function($post) use ($slug){
        return $post['slug'] == $slug;
    });

    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
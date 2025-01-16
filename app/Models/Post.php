<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post{
    public static function all(){
        return [
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
    }

    public static function find($slug){
        $post = Arr::first(static::all(), fn($post) => $post['slug'] == $slug);

        if(!$post){
            abort(404);
        }
        
        return $post;
    }
};
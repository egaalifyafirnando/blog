<?php

namespace App\Models;


class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul pertama",
            "slug" => "judul-pertama",
            "author" => "Ega Alifya",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos libero laudantium molestias deserunt, est obcaecati magnam velit eum laborum quo? Vero voluptatibus mollitia nam. Tempora voluptatibus porro eos esse assumenda."
        ],
        [
            "title" => "Judul kedua",
            "slug" => "judul-kedua",
            "author" => "Firnando",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos libero laudantium molestias deserunt, est obcaecati magnam velit eum laborum quo? Vero voluptatibus mollitia nam. Tempora voluptatibus porro eos esse assumenda."
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        // request url for category
        $title = '';
        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = 'In ' . $category->name;
        }
        // request url for author
        if (request('author')) {
            $author = User::firstWhere('username', request('author'));
            $title = 'By ' . $author->name;
        }


        return view('posts', [
            "title" => "All Posts " . $title,
            "active" => 'posts',
            "posts" => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(10)->withQueryString() // <-- withQueryString: membawa nilai query sebelumnya saat di paginate
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            "title" => "Single Post",
            "active" => 'posts',
            "post" => $post
        ]);
    }
}

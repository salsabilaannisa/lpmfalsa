<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    public function index()
    {
        $title = '';
        $active = 'categories';
        if(request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
            $active = $category->slug;
        }
        
        if(request('author')) {
            $author = User::firstWhere('username', request('author'));
            $title = ' by ' . $author->name;
        }

        return view('posts', [
            "title" => "All Posts" . $title,
            "active" => $active,
            "mycategory" => $this->MyCategory,
            "posts" => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(7)->withQueryString()
        ]);
    }

    public function show(Post $post)
    {
        $category = Category::firstWhere('id', $post->category_id);
        return view('post', [
            "title" => "Single Post",
            "active" => $category->slug,
            "mycategory" => $this->MyCategory,
            "post" => $post
        ]);
    }
}
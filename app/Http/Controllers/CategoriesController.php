<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;

class CategoriesController extends Controller
{
    public function index()
    {
        $kategori = Category::all();
        foreach($kategori as $item){
            $item->images = null;
            $images = Post::where('category_id', $item->id)->where('status', 'published')->first();
            if($images){
                $item->images = $images->image;
            }

        }
        return view('categories', [
            'title' => 'Post Categories', 
            'active' => 'categories',
            "mycategory" => $this->MyCategory,
            'categories' => $kategori
        ]); 
    }
}
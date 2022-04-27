<?php

namespace App\Http\Controllers;

use App\Models\Category;

class CategoriesController extends Controller
{
    public function index()
    {
        return view('categories', [
            'title' => 'Post Categories', 
            'active' => 'categories',
            "mycategory" => $this->MyCategory,
            'categories' => Category::all()
        ]); 
    }
}
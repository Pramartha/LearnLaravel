<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function show(Category $category){
        return view('posts', ['title' => 'Artikels in: ' . $category->name, 'posts' => $category->posts]);
    }
}

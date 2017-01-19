<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;

class FilterController extends Controller
{
    public function getIndex($category_id){
        $categories = Category::all();
        $posts = Post::where('category_id', '=', $category_id)
            ->orderBy('created_at', 'desc')
            ->paginate(5);
        return view('filter.index')->withPosts($posts)->withCategories($categories);
    }

}

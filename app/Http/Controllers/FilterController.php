<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;

class FilterController extends Controller
{
    public function getIndex($category_id){

        $posts = Post::where('category_id', '=', $category_id)
            ->orderBy('created_at', 'desc')
            ->paginate(5);
        return view('filter.index')->withPosts($posts);

        /*$post = Post::where('category_id', '=', $category_id)->first();
        return view('filter.index')->withPost($post);*/
    }
}

<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use Illuminate\Http\Request;

use App\Http\Requests;

class BlogController extends Controller
{
    public function getSingle($slug){
        $categories = Category::all();
        $post = Post::where('slug','=', $slug)->first();
        $builder = Post::orderBy('created_at', 'desc');
        $latest = $builder->take(5)->get();
        $posts = $builder->paginate(4);
        return view('blog.single')->withLatest($latest)->withPosts($posts)->withCategories($categories)->withPost($post);




    }


}

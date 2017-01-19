<?php

namespace App\Http\Controllers;


use App\Category;
use App\Post;

class PagesController extends Controller {
    public function getIndex(){
        $categories = Category::all();

        $posts = Post::orderBy('created_at', 'desc')->paginate(5);
        return view('pages.welcome')->withPosts($posts)->withCategories($categories);

    }

    public function getAbout(){
        return view('pages.about');
    }

    public function getContact(){
        return view('pages.contact');
    }


}